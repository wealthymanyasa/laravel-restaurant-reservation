<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 text-white cursor-pointer rounded-lg bg-indigo-500 hover:bg-indigo-700">Menu
                    List</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded-lg">

                <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <h2 class="text-xl font-bold text-green-700 uppercase text-center">edit menu</h2>
                    </div>
                    @method('PUT')
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="" id="name" name="name" value="{{ $menu->name }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('name') border-red-400 @enderror"
                            placeholder="enter name">
                        @error('name')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="" id="price" name="price" value="{{ $menu->price }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('price') border-red-400 @enderror"
                            placeholder="enter name">
                        @error('price')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="image">Upload image</label>
                        <div class="">
                            <img class="w-16 h-16 rounded-lg" src="{{ Storage::url($menu->image) }}" alt="menu/img">
                        </div>
                        <input
                            class="block py-2 px-2 w-full text-sm text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') border-red-400 @enderror"
                            id="image" type="file" name="image">
                        @error('image')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">

                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="4" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('description') border-red-400 @enderror"
                            placeholder="Write your description here...">
                            {{ $menu->description }}
                        </textarea>
                        @error('description')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">

                        <label for="categories"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                        <select multiple id="categories" name="categories[]" class="form-multiselect w-full mt-1 block">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-start mb-6">
                        <button type="submit"
                            class="text-white p-2 bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Update Menu</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-admin-layout>
