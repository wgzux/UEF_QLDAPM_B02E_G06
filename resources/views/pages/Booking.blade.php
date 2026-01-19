@extends('layouts.app')

@section('title', 'Booking - The Wandering Rose')

@section('content')
@php
  use Carbon\Carbon;
  $ciRaw = request('check_in');
  try { $ciDt = $ciRaw ? Carbon::parse($ciRaw) : Carbon::now(); } catch (\Exception $e) { $ciDt = Carbon::now(); }
  $coRaw = request('check_out');
  try { $coDt = $coRaw ? Carbon::parse($coRaw) : $ciDt->copy()->addDay(); } catch (\Exception $e) { $coDt = $ciDt->copy()->addDay(); }
  $displayNights = request('nights') ?? max(1, $ciDt->diffInDays($coDt));
  $displayRooms = request('rooms') ?? 1;
  $displayAdults = request('adults') ?? 2;
  $displayChildren = request('children') ?? 0;
  $month1 = $ciDt->copy();
  $month2 = $ciDt->copy()->addMonth();
@endphp

<section class="mt-8 px-4 md:px-12 lg:px-24 mb-16">
	<div class="max-w-6xl mx-auto">
		<div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16">
			<div class="flex items-center gap-6 w-full lg:w-auto justify-center lg:justify-start">
				<div class="text-right">
					<div class="flex items-center justify-end gap-2 mb-1">
						<span class="font-bold uppercase tracking-wider text-sm">NGÀY</span>
						<span class="bg-primary text-white text-[10px] px-2 py-0.5 rounded-full font-medium">{{ $displayNights }} Đêm</span>
					</div>
					<div class="flex items-baseline gap-2">
						<span class="font-display text-4xl lg:text-5xl text-gray-800 dark:text-white">{{ $ciDt->format('d') }}</span>
						<div class="flex flex-col text-xs text-gray-500 dark:text-gray-400 text-left leading-tight">
							<span>Tháng {{ $ciDt->format('n') }}</span>
							<span>{{ $ciDt->format('Y') }}</span>
						</div>
					</div>
				</div>
				<div class="flex items-baseline gap-2">
					<span class="font-display text-4xl lg:text-5xl text-gray-800 dark:text-white">{{ $coDt->format('d') }}</span>
					<div class="flex flex-col text-xs text-gray-500 dark:text-gray-400 text-left leading-tight">
						<span>Tháng {{ $coDt->format('n') }}</span>
						<span>{{ $coDt->format('Y') }}</span>
					</div>
				</div>
			</div>
			<div class="flex items-center gap-12 w-full lg:w-auto justify-center">
				<div class="text-center">
					<span class="block font-bold uppercase tracking-wider text-sm mb-2">PHÒNG</span>
					<div class="flex items-center justify-center">
					  <button id="dec-rooms" class="px-2 text-gray-500">-</button>
					  <span id="rooms-count" class="font-display text-4xl text-gray-800 dark:text-white">{{ $displayRooms }}</span>
					  <button id="inc-rooms" class="px-2 text-gray-500">+</button>
					</div>
				</div>
				<div class="text-center">
					<span class="block font-bold uppercase tracking-wider text-sm mb-2">NGƯỜI LỚN</span>
					<div class="flex items-center justify-center">
					  <button id="dec-adults" class="px-2 text-gray-500">-</button>
					  <span id="adults-count" class="font-display text-4xl text-gray-800 dark:text-white">{{ $displayAdults }}</span>
					  <button id="inc-adults" class="px-2 text-gray-500">+</button>
					</div>
				</div>
				<div class="text-center">
					<div class="flex items-center gap-2 mb-2 justify-center">
						<span class="block font-bold uppercase tracking-wider text-sm">TRẺ EM</span>
					</div>
					<div class="flex items-center justify-center">
					  <button id="dec-children" class="px-2 text-gray-500">-</button>
					  <span id="children-count" class="font-display text-4xl text-gray-800 dark:text-white">{{ $displayChildren }}</span>
					  <button id="inc-children" class="px-2 text-gray-500">+</button>
					</div>
				</div>
			</div>
			<div class="w-full lg:w-auto flex justify-center lg:justify-end">
				<button id="booking-search" class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded shadow-lg hover:shadow-xl transition-all flex items-center gap-2 text-sm font-medium tracking-wide uppercase">
					TÌM KIẾM
					<span class="material-icons text-sm">search</span>
				</button>
			</div>
		</div>
	</div>
</section>

<section class="max-w-7xl mx-auto px-4 md:px-12 lg:px-24 mb-24">
	<div id="booking-summary" class="hidden fixed right-6 bottom-6 bg-white shadow-xl rounded-lg p-4 w-80 dark:bg-gray-800 z-50">
		<h4 class="text-sm font-semibold mb-2">Tóm tắt đặt phòng</h4>
		<div class="text-sm text-gray-600 dark:text-gray-300 mb-2">
			<div>Check-in: <span id="bs-checkin">—</span></div>
			<div>Check-out: <span id="bs-checkout">—</span></div>
			<div>Số đêm: <span id="bs-nights">0</span></div>
			<div>Tổng giá: <span id="bs-total">0 ₫</span></div>
		</div>
		<div id="bs-availability" class="text-sm text-gray-700 dark:text-gray-300 mt-2"></div>
		<div class="flex gap-2">
			<a id="bs-book-link" href="/bookingdetails" class="flex-1 text-center bg-primary text-white px-3 py-2 rounded disabled:opacity-50">Đặt ngay</a>
			<button id="bs-clear" class="px-3 py-2 border rounded">Xóa</button>
		</div>
	</div>
</section>

<section class="px-4 md:px-12 lg:px-24 pb-24 relative">
	<div class="max-w-7xl mx-auto relative">
		<button class="absolute left-[-20px] lg:left-[-60px] top-[250px] lg:top-[50%] transform -translate-y-1/2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md hover:bg-primary-dark transition-colors z-10">
			<span class="material-icons">arrow_back</span>
		</button>
		<button class="absolute right-[-20px] lg:right-[-60px] top-[750px] lg:top-[50%] transform -translate-y-1/2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md hover:bg-primary-dark transition-colors z-10">
			<span class="material-icons">arrow_forward</span>
		</button>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
			<div class="month" data-month="{{ $month1->format('n') }}" data-year="{{ $month1->format('Y') }}">
				<h3 class="font-display text-3xl font-bold text-primary text-center mb-8">Tháng {{ $month1->format('n') }} {{ $month1->format('Y') }}</h3>
				<div class="grid grid-cols-7 mb-4">
					<div class="text-center font-bold text-sm">T2</div>
					<div class="text-center font-bold text-sm">T3</div>
					<div class="text-center font-bold text-sm">T4</div>
					<div class="text-center font-bold text-sm">T5</div>
					<div class="text-center font-bold text-sm">T6</div>
					<div class="text-center font-bold text-sm">T7</div>
					<div class="text-center font-bold text-sm">CN</div>
				</div>
				<div class="grid grid-cols-7 gap-2">
					<div class="aspect-square flex flex-col justify-center items-center border border-gray-100 dark:border-gray-800 rounded bg-white dark:bg-surface-dark opacity-40">
						<span class="text-xl font-light text-gray-300 dark:text-gray-600">1</span>
					</div>
					<!-- ... other days ... -->
					<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
						<span class="text-2xl font-light text-gray-900 dark:text-white">27</span>
						<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
					</div>
					<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
						<span class="text-2xl font-light text-gray-900 dark:text-white">28</span>
						<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
					</div>
				</div>
			</div>

			<div class="month" data-month="{{ $month2->format('n') }}" data-year="{{ $month2->format('Y') }}">
				<h3 class="font-display text-3xl font-bold text-primary text-center mb-8">Tháng {{ $month2->format('n') }} {{ $month2->format('Y') }}</h3>
				<div class="grid grid-cols-7 mb-4">
					<div class="text-center font-bold text-sm">T2</div>
					<div class="text-center font-bold text-sm">T3</div>
					<div class="text-center font-bold text-sm">T4</div>
					<div class="text-center font-bold text-sm">T5</div>
					<div class="text-center font-bold text-sm">T6</div>
					<div class="text-center font-bold text-sm">T7</div>
					<div class="text-center font-bold text-sm">CN</div>
				</div>
				<div class="grid grid-cols-7 gap-2">
					<div class="aspect-square"></div>
					<div class="aspect-square"></div>
					<div class="aspect-square flex flex-col justify-center items-center border border-primary/40 dark:border-primary/60 rounded bg-primary-light dark:bg-primary/20 cursor-pointer relative">
						<span class="text-2xl font-light text-gray-900 dark:text-white">1</span>
						<span class="text-[9px] text-primary-dark dark:text-primary-light mt-1">5.000.000 ₫</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@push('scripts')
<script>
	(function(){
		const months = document.querySelectorAll('.month');
		const dateCells = [];

		// Generate full calendar grids dynamically and fetch availability for the whole displayed range
		(async function generateCalendars(){
			if(!months || months.length===0) return;
			// determine overall start/end across months
			let minDate = null, maxDate = null;
			months.forEach(monthEl => {
				const m = parseInt(monthEl.dataset.month,10) - 1;
				const y = parseInt(monthEl.dataset.year,10);
				const first = new Date(Date.UTC(y,m,1));
				const last = new Date(Date.UTC(y,m+1,0));
				if(!minDate || first < minDate) minDate = first;
				if(!maxDate || last > maxDate) maxDate = last;
			});

			const startIso = minDate.toISOString().slice(0,10);
			const endIso = maxDate.toISOString().slice(0,10);

			let availability = {};
			try{
				const res = await fetch(`/availability/range?start=${startIso}&end=${endIso}`);
				if(res.ok){
					const json = await res.json();
					availability = json.dates || {};
				}
			}catch(e){
				console.warn('Could not fetch availability range', e);
			}

			months.forEach(monthEl => {
				const m = parseInt(monthEl.dataset.month,10) - 1;
				const y = parseInt(monthEl.dataset.year,10);
				const container = monthEl.querySelector('.grid-cols-7.gap-2');
				if(!container) return;
				container.innerHTML = '';
				const first = new Date(Date.UTC(y,m,1));
				const startIdx = (first.getUTCDay() + 6) % 7; // Monday-first index
				const daysInMonth = new Date(Date.UTC(y,m+1,0)).getUTCDate();
				const totalCells = 42; // 6 weeks

				for(let i=0;i<totalCells;i++){
					const cell = document.createElement('div');
					cell.className = 'aspect-square flex flex-col justify-center items-center border rounded bg-white dark:bg-surface-dark';
					const dayIndex = i - startIdx + 1;
					if(dayIndex >= 1 && dayIndex <= daysInMonth){
						const daySpan = document.createElement('span');
						daySpan.className = 'text-2xl font-light text-gray-900 dark:text-white';
						daySpan.textContent = dayIndex;
						cell.appendChild(daySpan);
						const iso = new Date(Date.UTC(y,m,dayIndex)).toISOString().slice(0,10);
						cell.dataset.dateIso = iso;

						// derive price and availability from fetched availability data
						let totalAvailable = 0;
						let price = null;
						if(availability[iso]){
							availability[iso].forEach(rt=>{ totalAvailable += rt.available_rooms; if(price===null) price = rt.base_price; });
						}

						const priceSpan = document.createElement('span');
						priceSpan.className = 'text-[9px] text-primary-dark dark:text-primary-light mt-1';
						priceSpan.textContent = price ? price.toLocaleString('vi-VN') + ' ₫' : '';
						cell.appendChild(priceSpan);

						if(totalAvailable > 0){
							cell.classList.add('cursor-pointer');
						} else {
							cell.classList.add('opacity-40');
						}

						dateCells.push(cell);
					} else {
						const emptySpan = document.createElement('span');
						emptySpan.className = 'text-xl font-light text-gray-300 dark:text-gray-600';
						emptySpan.textContent = '';
						cell.classList.add('opacity-40');
						cell.appendChild(emptySpan);
					}
					container.appendChild(cell);
				}
			});

			attachDateHandlers();
		})();

		function attachDateHandlers(){
			dateCells.forEach(cell=>{
				cell.addEventListener('click', ()=>{
					const iso = cell.dataset.dateIso;
					if(!iso) return;
					if(!checkIn || (checkIn && checkOut)){ checkIn = iso; checkOut = null; }
					else { if(new Date(iso) <= new Date(checkIn)){ checkOut = iso; } else { checkOut = iso; } }
					if(checkIn && checkOut && new Date(checkOut) <= new Date(checkIn)){
						const next = new Date(checkIn); next.setDate(next.getDate()+1); checkOut = next.toISOString().slice(0,10);
					}
					toggleSelection();
					bsCheckin.textContent = checkIn || '—';
					bsCheckout.textContent = checkOut || '—';
					if(checkIn && checkOut){
						const calc = calculateTotal();
						bsNights.textContent = calc.nights;
						bsTotal.textContent = (calc.total>0? calc.total.toLocaleString('vi-VN')+' ₫' : '—');
						summary.classList.remove('hidden');
						const roomsEl = document.getElementById('rooms-count');
						const rooms = roomsEl ? parseInt(roomsEl.textContent.trim(),10) || 1 : 1;
						bsLink.href = `/bookingdetails?check_in=${checkIn}&check_out=${checkOut}&nights=${calc.nights}&rooms=${rooms}&total=${calc.total}&adults=${adults}&children=${children}`;
					} else { bsNights.textContent='0'; bsTotal.textContent='0 ₫'; bsLink.href='/bookingdetails'; }
				});
			});
		}

		let checkIn = null, checkOut = null;
		const summary = document.getElementById('booking-summary');
		const bsCheckin = document.getElementById('bs-checkin');
		const bsCheckout = document.getElementById('bs-checkout');
		const bsNights = document.getElementById('bs-nights');
		const bsTotal = document.getElementById('bs-total');
		const bsLink = document.getElementById('bs-book-link');
		const bsClear = document.getElementById('bs-clear');

		// guest/room counters
		let roomsCountEl = document.getElementById('rooms-count');
		let adultsCountEl = document.getElementById('adults-count');
		let childrenCountEl = document.getElementById('children-count');
		let rooms = roomsCountEl ? parseInt(roomsCountEl.textContent.trim(),10) || 1 : 1;
		let adults = adultsCountEl ? parseInt(adultsCountEl.textContent.trim(),10) || 2 : 2;
		let children = childrenCountEl ? parseInt(childrenCountEl.textContent.trim(),10) || 0 : 0;

		function updateCountersUI(){
			if(roomsCountEl) roomsCountEl.textContent = rooms;
			if(adultsCountEl) adultsCountEl.textContent = adults;
			if(childrenCountEl) childrenCountEl.textContent = children;
		}

		// wire increment/decrement buttons
		document.getElementById('inc-rooms')?.addEventListener('click', ()=>{ rooms = rooms + 1; updateCountersUI(); });
		document.getElementById('dec-rooms')?.addEventListener('click', ()=>{ rooms = Math.max(1, rooms-1); updateCountersUI(); });
		document.getElementById('inc-adults')?.addEventListener('click', ()=>{ adults = adults + 1; updateCountersUI(); });
		document.getElementById('dec-adults')?.addEventListener('click', ()=>{ adults = Math.max(1, adults-1); updateCountersUI(); });
		document.getElementById('inc-children')?.addEventListener('click', ()=>{ children = children + 1; updateCountersUI(); });
		document.getElementById('dec-children')?.addEventListener('click', ()=>{ children = Math.max(0, children-1); updateCountersUI(); });

		function toggleSelection(){
			dateCells.forEach(c=>c.classList.remove('bg-primary','text-white'));
			if(checkIn){
				const start = new Date(checkIn);
				const end = checkOut ? new Date(checkOut) : start;
				dateCells.forEach(c=>{
					const d = new Date(c.dataset.dateIso);
					if(d>=start && d<=end){ c.classList.add('bg-primary','text-white'); }
				});
			}
		}

		function calculateTotal(){
			if(!checkIn || !checkOut) return 0;
			const s = new Date(checkIn);
			const e = new Date(checkOut);
			const nights = Math.round((e - s)/(1000*60*60*24));
			let total = 0;
			dateCells.forEach(c=>{
				const d = new Date(c.dataset.dateIso);
				if(d>=s && d<e){
					const priceSpan = c.querySelector('span.text-[9px]');
					if(priceSpan){
						const pText = priceSpan.textContent.replace(/[^0-9]/g,'');
						const p = parseInt(pText||0,10);
						total += p;
					}
				}
			});
			return { nights, total };
		}

		dateCells.forEach(cell=>{
			cell.addEventListener('click', ()=>{
				const iso = cell.dataset.dateIso;
				if(!checkIn || (checkIn && checkOut)){ checkIn = iso; checkOut = null; }
				else { if(new Date(iso) <= new Date(checkIn)){ checkOut = iso; } else { checkOut = iso; } }
				if(checkIn && checkOut && new Date(checkOut) <= new Date(checkIn)){
					const next = new Date(checkIn); next.setDate(next.getDate()+1); checkOut = next.toISOString().slice(0,10);
				}
				toggleSelection();
				bsCheckin.textContent = checkIn || '—';
				bsCheckout.textContent = checkOut || '—';
				if(checkIn && checkOut){
					const calc = calculateTotal();
					bsNights.textContent = calc.nights;
					bsTotal.textContent = (calc.total>0? calc.total.toLocaleString('vi-VN')+' ₫' : '—');
					summary.classList.remove('hidden');
					const roomsEl = document.getElementById('rooms-count');
					const rooms = roomsEl ? parseInt(roomsEl.textContent.trim(),10) || 1 : 1;
					bsLink.href = `/bookingdetails?check_in=${checkIn}&check_out=${checkOut}&nights=${calc.nights}&rooms=${rooms}&total=${calc.total}&adults=${adults}&children=${children}`;
				} else { bsNights.textContent='0'; bsTotal.textContent='0 ₫'; bsLink.href='/bookingdetails'; }
			});
		});

		if(bsClear) bsClear.addEventListener('click', ()=>{ checkIn=null; checkOut=null; toggleSelection(); summary.classList.add('hidden'); bsCheckin.textContent='—'; bsCheckout.textContent='—'; bsNights.textContent='0'; bsTotal.textContent='0 ₫'; bsLink.href='/bookingdetails'; });

		// Search button: query availability then show results in summary
		const searchBtn = document.getElementById('booking-search');
		if(searchBtn){
			searchBtn.addEventListener('click', ()=>{
				if(checkIn && checkOut){
					const calc = calculateTotal();
					const roomsEl = document.getElementById('rooms-count');
					const rooms = roomsEl ? parseInt(roomsEl.textContent.trim(),10) || 1 : 1;
					fetch(`/availability?check_in=${checkIn}&check_out=${checkOut}`)
						.then(r=>{ if(!r.ok) throw new Error('Network response was not ok'); return r.json(); })
						.then(data=>{
							const availEl = document.getElementById('bs-availability');
							if(!data.room_types || data.room_types.length===0){
								availEl.innerHTML = '<div class="text-sm text-red-600 dark:text-red-400">Không có loại phòng nào.</div>';
							} else {
								let html = '<div class="font-medium mb-1">Tình trạng phòng</div>';
								html += '<ul class="space-y-1">';
								data.room_types.forEach(rt=>{
									html += `<li class="text-sm">${rt.type_name}: <strong>${rt.available_rooms}</strong> trống / ${rt.total_rooms}</li>`;
								});
								html += '</ul>';
								availEl.innerHTML = html;
								const firstAvailable = data.room_types.find(r=>r.available_rooms>0);
								if(firstAvailable){
									bsLink.href = `/bookingdetails?check_in=${checkIn}&check_out=${checkOut}&nights=${calc.nights}&rooms=${rooms}&total=${calc.total}&room_type=${firstAvailable.id}&adults=${adults}&children=${children}`;
								} else {
									bsLink.href = `/bookingdetails?check_in=${checkIn}&check_out=${checkOut}&nights=${calc.nights}&rooms=${rooms}&total=${calc.total}&adults=${adults}&children=${children}`;
								}
							}
							summary.classList.remove('hidden');
						})
						.catch(err=>{
							const availEl = document.getElementById('bs-availability');
							availEl.innerHTML = '<div class="text-sm text-red-600 dark:text-red-400">Không thể kiểm tra tình trạng phòng.</div>';
							summary.classList.remove('hidden');
						});
				}else{
					summary.classList.remove('hidden');
				}
			});
		}
	})();
</script>
@endpush

