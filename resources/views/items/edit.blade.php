<x-app-layout title="Edit Item">
    <div class="w-full h-screen flex items-center justify-center">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Edit Item</h1>
            <a href="{{ route('items.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">Back to List</a>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('items.update', $item) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $item->name) }}" class="w-full border p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea name="description" id="description" class="w-full border p-2 rounded">{{ old('description', $item->description) }}</textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
