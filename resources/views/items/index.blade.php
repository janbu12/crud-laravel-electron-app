<x-app-layout title="All Items">
    <div class="w-full min-h-screen flex items-center justify-center my-4">
        <div class="w-full md:max-w-4xl lg:w-1/2 bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Items List</h1>
            <a href="{{ route('items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Item</a>
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Name</th>
                        <th class="py-2">Description</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr class="border-b">
                            <td class="py-2">{{ $item->name }}</td>
                            <td class="py-2">{{ $item->description }}</td>
                            <td class="py-2">
                                <a href="{{ route('items.edit', $item) }}" class="text-blue-500">Edit</a>
                                <form action="{{ route('items.destroy', $item) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 ml-2">Delete</button>
                                </form>
                                <a href="{{ route('items.show', $item) }}" class="text-gray-500 ml-2">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
