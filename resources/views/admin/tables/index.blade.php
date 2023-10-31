<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}"
                    class="px-4 py-2 text-white cursor-pointer rounded-lg bg-indigo-500 hover:bg-indigo-700">Create New
                    Table</a>
            </div>
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Guest Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Location
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($tables as $table)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $table->name }}
                                    </td>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $table->guest_number }}
                                    </td>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $table->location }}
                                    </td>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $table->status }}
                                    </td>
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.tables.edit', $table->id) }}"
                                                class="px-4 py-2 bg-green-500  text-white cursor-pointer rounded-lg hover:bg-green-700">Edit</a>
                                            <form
                                                class="text-white px-4 py-2 bg-red-500 rounded-lg cursor-pointer hover:bg-red-700"
                                                method="POST"
                                                action="{{ route('admin.tables.destroy', $table->id) }}"
                                                onSubmit="return confirm('Are you sure you want to delete?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                            </div>
        </div>
    </div>
</x-admin-layout>
