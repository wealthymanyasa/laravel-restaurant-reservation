<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section>
                    <div id="main" class="main-content flex-1  pb-24 md:pb-5">


                            <div
                                class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-purple-800 p-4 shadow text-2xl text-white">
                                <h1 class="font-bold pl-2">Analytics</h1>
                            </div>


                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div
                                    class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-green-600"><i
                                                    class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600">Total Categories</h2>
                                            <p class="font-bold text-3xl">{{ $categories }} <span
                                                    class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div
                                    class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-pink-600"><i
                                                    class="fas fa-users fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600">Total Menus</h2>
                                            <p class="font-bold text-3xl">{{ $menus }} <span
                                                    class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div
                                    class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-yellow-600"><i
                                                    class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600">Tables</h2>
                                            <p class="font-bold text-3xl">{{ $tables }} <span
                                                    class="text-yellow-600"><i class="fas fa-caret-up"></i></span></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div
                                    class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-blue-600"><i
                                                    class="fas fa-server fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600">Total Reservations</h2>
                                            <p class="font-bold text-3xl">{{ $reservations }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div
                                    class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-indigo-600"><i
                                                    class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600"> Total Users</h2>
                                            <p class="font-bold text-3xl">{{ $users }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div
                                    class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-red-600"><i
                                                    class="fas fa-inbox fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600">Issues</h2>
                                            <p class="font-bold text-3xl">3 <span class="text-red-500"><i
                                                        class="fas fa-caret-up"></i></span></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                        </div>


                        <div class="flex flex-row flex-wrap flex-grow mt-2">



                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Table Card-->
                                <div class="bg-white border-transparent rounded-lg shadow-xl">
                                    <div
                                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                        <h2 class="font-bold uppercase text-gray-600">Users</h2>
                                    </div>
                                    <div class="p-5">
                                        <table class="w-full p-5 text-gray-700">
                                            <thead>
                                                <tr>
                                                    <th class="text-left text-blue-900">Name</th>

                                                    <th class="text-left text-blue-900">Is Admin</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($user as $singleuser)
                                                    <tr>
                                                        <td>{{ $singleuser->name }}</td>
                                                        <td>{{ $singleuser->is_admin }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                    </div>
                                </div>
                                <!--/table Card-->
                            </div>



                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-admin-layout>
