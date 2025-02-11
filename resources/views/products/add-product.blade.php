<x-app-layout>
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New Product</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        {{-- Product Name --}}
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <input
                type="text"
                name="name"
                id="name"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                placeholder="Enter product name"
                required>
        </div>

        {{-- Description --}}
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea
                name="description"
                id="description"
                rows="4"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                placeholder="Enter product description"
                required></textarea>
        </div>

        {{-- Price --}}
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input
                type="number"
                name="price"
                id="price"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                placeholder="Enter product price"
                step="0.01"
                required>
        </div>

        {{-- Category --}}
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <select
                name="category"
                id="category"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                required>
                <option value="">Select a category</option>
                {{-- Add categories dynamically here --}}
                <option value="1">Electronics</option>
                <option value="2">Clothing</option>
                <option value="3">Accessories</option>
            </select>
        </div>

        {{-- Image Upload --}}
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
            <input
                type="file"
                name="image"
                id="image"
                class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer focus:ring-orange-500 focus:border-orange-500">
        </div>

        {{-- Submit Button --}}
        <div class="flex justify-end">
            <button
                type="submit"
                class="bg-orange-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-orange-600 focus:ring focus:ring-orange-300">
                Add Product
            </button>
        </div>
    </form>
</div>
</x-app-layout>
