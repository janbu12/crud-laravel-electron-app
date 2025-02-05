<x-app-layout title="Add Item">
    <div class="w-full h-screen flex items-center justify-center">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Add New Item</h1>
            <a href="{{ route('items.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">Back</a>
            <form action="{{ route('items.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea name="description" id="description" class="w-full border p-2 rounded"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
