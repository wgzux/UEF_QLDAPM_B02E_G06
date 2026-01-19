@extends('layouts.admin')

@section('title', 'Rooms')

@section('content')
<div class="bg-brand-brown text-white py-6">
  <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
    <div>
      <h1 class="font-display uppercase tracking-widest text-lg">Admin Dashboard</h1>
      <div class="text-sm opacity-90">Rooms management</div>
    </div>
    <a href="/admin/rooms/create" class="bg-white text-brand-brown px-4 py-2 rounded font-semibold">Add Room</a>
  </div>
</div>
<div class="container mx-auto px-4 py-8">

  @if(session('success'))
    <div class="mb-4 text-green-600">{{ session('success') }}</div>
  @endif

  <div class="overflow-hidden rounded-lg shadow">
    <table class="w-full bg-white">
      <thead class="bg-[#f7efe6]">
        <tr>
          <th class="p-3 text-left text-sm font-semibold">ID</th>
          <th class="p-3 text-left text-sm font-semibold">Number</th>
          <th class="p-3 text-left text-sm font-semibold">Type</th>
          <th class="p-3 text-left text-sm font-semibold">Status</th>
          <th class="p-3 text-left text-sm font-semibold">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        @foreach($rooms as $r)
        <tr class="hover:bg-gray-50">
          <td class="p-3 text-sm">{{ $r->id }}</td>
          <td class="p-3 text-sm">{{ $r->room_number }}</td>
          <td class="p-3 text-sm">{{ optional($r->roomType)->type_name }}</td>
          <td class="p-3 text-sm">{{ $r->status }}</td>
          <td class="p-3 text-sm">
            <a class="inline-block text-white bg-brand-brown px-3 py-1 rounded mr-2 text-xs" href="/admin/rooms/{{ $r->id }}/edit">Edit</a>
            <form action="/admin/rooms/{{ $r->id }}" method="POST" style="display:inline">
              @csrf
              @method('DELETE')
              <button class="inline-block bg-red-600 text-white px-3 py-1 rounded text-xs" onclick="return confirm('Delete room?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
