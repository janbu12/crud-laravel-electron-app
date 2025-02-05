<x-app-layout title="Show Item">
    <div class="w-full h-screen flex items-center justify-center">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Item Details</h1>
            <a href="{{ route('items.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block">Back to List</a>

            <div class="space-y-4">
                <p><strong>Name:</strong> {{ $item->name }}</p>
                <p><strong>Description:</strong> {{ $item->description ?? 'No description provided' }}</p>
                <p><strong>Created At:</strong> {{ $item->created_at->format('d M Y H:i') }}</p>
                <p><strong>Updated At:</strong> {{ $item->updated_at->format('d M Y H:i') }}</p>
            </div>

            <div class="mt-6 space-x-4">
                <a href="{{ route('items.edit', $item) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                <form action="{{ route('items.destroy', $item) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
