<div class="space-y-4">
  <div>
    <label class="block text-sm font-medium mb-1">Room number</label>
    <input name="room_number" value="{{ old('room_number', $room->room_number ?? '') }}" class="w-full border rounded p-2" required />
  </div>

  <div>
    <label class="block text-sm font-medium mb-1">Room type</label>
    <select name="room_type_id" class="w-full border rounded p-2" required>
      <option value="">-- Select type --</option>
      @foreach($types as $t)
        <option value="{{ $t->id }}" @if(old('room_type_id', $room->room_type_id ?? '') == $t->id) selected @endif>{{ $t->type_name }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <label class="block text-sm font-medium mb-1">Status</label>
    <select name="status" class="w-full border rounded p-2" required>
      <option value="Active" @if(old('status', $room->status ?? '') == 'Active') selected @endif>Active</option>
      <option value="Maintenance" @if(old('status', $room->status ?? '') == 'Maintenance') selected @endif>Maintenance</option>
    </select>
  </div>

  <div class="pt-2">
    <button class="bg-brand-brown text-white px-4 py-2 rounded">Save</button>
  </div>
</div>
