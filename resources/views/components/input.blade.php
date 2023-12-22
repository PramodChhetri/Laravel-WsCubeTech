<!-- Input -->
<div class="mb-4">
    <label for="{{$id}}" class="block text-gray-700 text-sm font-bold mb-2">{{$label}}</label>
    <input type="{{$type}}" id="{{$id}}" name="{{$name}}" class="w-full px-3 py-2 border rounded-md" required>
</div>
@error($name)
    <span class="p-1 text-red-500">{{$message}}</span>
@enderror