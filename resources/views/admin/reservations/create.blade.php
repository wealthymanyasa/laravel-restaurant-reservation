<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 text-white cursor-pointer rounded-lg bg-indigo-500 hover:bg-indigo-700">Reservations
                    List</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded-lg">

                <form method="POST" action="{{ route('admin.reservations.store') }}">
                    @csrf
                    <div class="">
                        <h2 class="text-xl font-bold text-green-700 uppercase text-center">Create New Reservation</h2>
                    </div>
                    <div class="mb-6">
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" id="first_name" name="first_name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('first_name') border-red-400 @enderror"
                            placeholder="First Name">
                        @error('first_name')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('last_name') border-red-400 @enderror"
                            placeholder="Last Name">
                        @error('last_name')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Address</label>
                        <input type="email" id="email" name="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('email') border-red-400 @enderror"
                            placeholder="Email">
                        @error('email')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="tel_number"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone
                            Number</label>
                        <input type="text" id="tel_number" name="tel_number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('tel_number') border-red-400 @enderror"
                            placeholder="Telephone Number">
                        @error('tel_number')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="res_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reservation
                            Date</label>
                        <input type="date" id="res_date" name="res_date"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('res_date') border-red-400 @enderror"
                            placeholder="Reservation Date">
                        @error('res_date')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="guest_number"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
                        <input type="number" id="guest_number" name="guest_number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('guest_number') border-red-400 @enderror"
                            placeholder="Guest Number">
                        @error('guest_number')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">

                        <label for="table_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Table</label>
                        <select id="table_id" name="table_id" class="w-full mt-1 block rounded-lg">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }}
                                    ({{ $table->guest_number }} Guests)
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-start mb-6">
                        <button type="submit"
                            class="text-white p-2 bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Create Reservations</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-admin-layout>
