<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New Product</h1>

        <form id="productForm" class="space-y-6">


            {{-- Product Name --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                    placeholder="Enter product name">
            </div>

            {{-- Description --}}
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                    placeholder="Enter product description"></textarea>
            </div>

            {{-- Price --}}
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" step="0.01" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                    placeholder="Enter product price">
            </div>

            {{-- Category --}}


            {{-- Submit Button --}}
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-orange-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-orange-600 focus:ring focus:ring-orange-300">
                    Add Product
                </button>
            </div>
        </form>
    </div>

    {{-- Include Axios --}}

    <script>
        // Set Axios defaults
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute(
            'content');
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    </script>
    <script>
        document.getElementById('productForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            try {
                const response = await axios.post('/api/products', {
                    name: document.getElementById('name').value,
                    description: document.getElementById('description').value,
                    price: parseFloat(document.getElementById('price').value),
                });

                alert('Product created!');
                document.getElementById('productForm').reset();
            } catch (error) {
                if (error.response.status === 419) { // CSRF failure
                    alert('Session expired. Please refresh the page.');
                    window.location.reload();
                } else {
                    console.error('Error:', error);
                    alert('Error: ' + error.response?.data?.message || 'Unknown error');
                }
            }
        });
    </script>


</x-app-layout>
