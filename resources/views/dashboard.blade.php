<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section>
                    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                        <div class=" pt-3">
                            <div class="rounded-tl-3xl bg-gradient-to-r from-green-900 to-purple-800 p-4 shadow text-2xl text-white">
                                <h1 class="font-bold pl-2">Welcome</h1>
                            </div>
                        </div>
                        <div class="container w-full px-5 py-6 mx-auto">
                            <h2 class="text-xl font-extrabold p-3 uppercase text-center">Our Menus Today</h2>
                        <div class="grid lg:grid-cols-4 gap-y-6">
                            @foreach ($menus as $menu)
                                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                                    <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                                    <div class="px-6 py-4">
                                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                            {{ $menu->name }}</h4>
                                        <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                                    </div>
                                    <div class="flex items-center justify-between p-4">
                                        <span class="text-xl text-green-600">${{ $menu->price }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
