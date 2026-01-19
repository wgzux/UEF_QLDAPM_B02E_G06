@extends('layouts.app')

@section('title', 'Booking - The Wandering Rose')

@section('content')
<section class="mt-8 px-4 md:px-12 lg:px-24 mb-16">
	<div class="max-w-6xl mx-auto">
		<div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16">
			<div class="flex items-center gap-6 w-full lg:w-auto justify-center lg:justify-start">
				<div class="text-right">
					<div class="flex items-center justify-end gap-2 mb-1">
						<span class="font-bold uppercase tracking-wider text-sm">NGÀY</span>
						<span class="bg-primary text-white text-[10px] px-2 py-0.5 rounded-full font-medium">10 Đêm</span>
					</div>
					<div class="flex items-baseline gap-2">
						<span class="font-display text-4xl lg:text-5xl text-gray-800 dark:text-white">27</span>
						<div class="flex flex-col text-xs text-gray-500 dark:text-gray-400 text-left leading-tight">
							<span>Tháng 9</span>
							<span>2025</span>
						</div>
					</div>
				</div>
				<div class="flex items-baseline gap-2">
					<span class="font-display text-4xl lg:text-5xl text-gray-800 dark:text-white">6</span>
					<div class="flex flex-col text-xs text-gray-500 dark:text-gray-400 text-left leading-tight">
						<span>Tháng 10</span>
						<span>2025</span>
					</div>
				</div>
			</div>
			<div class="flex items-center gap-12 w-full lg:w-auto justify-center">
				<div class="text-center">
					<span class="block font-bold uppercase tracking-wider text-sm mb-2">PHÒNG</span>
					<span id="rooms-count" class="font-display text-4xl text-gray-800 dark:text-white">1</span>
				</div>
				<div class="text-center">
					<span class="block font-bold uppercase tracking-wider text-sm mb-2">NGƯỜI LỚN</span>
					<span class="font-display text-4xl text-gray-800 dark:text-white">2</span>
				</div>
				<div class="text-center">
					<div class="flex items-center gap-2 mb-2 justify-center">
						<span class="block font-bold uppercase tracking-wider text-sm">TRẺ EM</span>
						<button class="text-gray-400 hover:text-primary">
							<span class="material-icons">expand_more</span>
						</button>
					</div>
					<span class="font-display text-4xl text-gray-800 dark:text-white">0</span>
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
			<div class="month" data-month="9" data-year="2025">
				<h3 class="font-display text-3xl font-bold text-primary text-center mb-8">Tháng 9 2025</h3>
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

			<div class="month" data-month="10" data-year="2025">
				<h3 class="font-display text-3xl font-bold text-primary text-center mb-8">Tháng 10 2025</h3>
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
		months.forEach(monthEl => {
			const m = parseInt(monthEl.dataset.month,10) - 1;
			const y = parseInt(monthEl.dataset.year,10);
			monthEl.querySelectorAll('.aspect-square').forEach(cell => {
				const daySpan = cell.querySelector('span');
				if(!daySpan) return;
				const dayText = daySpan.textContent.trim();
				const day = parseInt(dayText,10);
				if(isNaN(day)) return;
				const date = new Date(Date.UTC(y,m,day));
				cell.dataset.dateIso = date.toISOString().slice(0,10);
				if(cell.classList.contains('cursor-pointer')) dateCells.push(cell);
			});
		});

		let checkIn = null, checkOut = null;
		const summary = document.getElementById('booking-summary');
		const bsCheckin = document.getElementById('bs-checkin');
		const bsCheckout = document.getElementById('bs-checkout');
		const bsNights = document.getElementById('bs-nights');
		const bsTotal = document.getElementById('bs-total');
		const bsLink = document.getElementById('bs-book-link');
		const bsClear = document.getElementById('bs-clear');

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
					bsLink.href = `/bookingdetails?check_in=${checkIn}&check_out=${checkOut}&nights=${calc.nights}&rooms=${rooms}&total=${calc.total}`;
				} else { bsNights.textContent='0'; bsTotal.textContent='0 ₫'; bsLink.href='/bookingdetails'; }
			});
		});

		if(bsClear) bsClear.addEventListener('click', ()=>{ checkIn=null; checkOut=null; toggleSelection(); summary.classList.add('hidden'); bsCheckin.textContent='—'; bsCheckout.textContent='—'; bsNights.textContent='0'; bsTotal.textContent='0 ₫'; bsLink.href='/bookingdetails'; });

		// Search button: navigate to booking details with selected dates
		const searchBtn = document.getElementById('booking-search');
		if(searchBtn){
			searchBtn.addEventListener('click', ()=>{
				if(checkIn && checkOut){
					const calc = calculateTotal();
					const roomsEl = document.getElementById('rooms-count');
					const rooms = roomsEl ? parseInt(roomsEl.textContent.trim(),10) || 1 : 1;
					window.location.href = `/bookingdetails?check_in=${checkIn}&check_out=${checkOut}&nights=${calc.nights}&rooms=${rooms}&total=${calc.total}`;
				}else{
					// if dates not fully selected, show the summary panel to prompt selection
					summary.classList.remove('hidden');
				}
			});
		}
	})();
</script>
@endpush

