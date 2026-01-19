@extends('layouts.admin')

@section('title', 'Add Room')

@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-display text-primary mb-4">Add Room</h1>

  @if($errors->any())
    <div class="text-red-600 mb-4">Please fix the errors below.</div>
  @endif

    <form method="POST" action="/admin/rooms">
      @csrf
      @include('admin.rooms._form')
    </form>
  </div>
</div>

@endsection
