<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2 ">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 text-white cursor-pointer rounded-lg bg-indigo-500 hover:bg-indigo-700">Table
                    List</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded-lg">
                <div class="">
                    <h2 class="text-xl font-bold text-green-700 uppercase text-center">Create New Table</h2>
                </div>
                <form method="POST" action="{{ route('admin.tables.store') }} " enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="name" id="name" name="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('name') border-red-400 @enderror"
                            placeholder="Enter name">
                        @error('name')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="guest_number"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
                        <input type="number" min="0.00" max="10000.00" step="0.01" id="price"
                            name="guest_number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('guest_number') border-red-400 @enderror"
                            placeholder="Enter guest number">
                        @error('guest_number')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">

                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select multiple id="status" name="status"
                            class="form-multiselect w-full mt-1 block rounded-lg focus:border-blue-500 @error('status') border-red-400 @enderror">
                            <option value="pending">Pending</option>
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                        @error('status')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">

                        <label for="location"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <select multiple id="location" name="location"
                            class="w-full mt-1 block rounded-lg @error('location') border-red-400 @enderror">
                            <option value="front">Front</option>
                            <option value="inside">Inside</option>
                            <option value="outside">Outside</option>
                        </select>
                        @error('location')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex items-start mb-6">
                        <button type="submit"
                            class="text-white p-2 bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Create Table</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-admin-layout>
