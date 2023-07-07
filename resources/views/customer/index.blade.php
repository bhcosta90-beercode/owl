<x-app-layout>

<x-container>
    <div class="relative mb-2 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">City</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">State</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $item)
                <tr>
                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $item->user->name }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $item->user->email }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $item->address->city }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $item->address->state }}</td>
                    <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                    <a href="{{ route('customer.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                    <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                        delete
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $customers->links() }}
</x-container>

</x-app-layout>