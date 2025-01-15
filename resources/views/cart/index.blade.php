<div class="container mx-auto p-4">
    <!-- Header -->
    <div class="mb-4">
      <h1 class="text-2xl font-bold">Your Cart</h1>
      <p class="text-sm text-gray-500">Review your items before checkout.</p>
    </div>

    <!-- Cart Items Table -->
    <table class="w-full text-left border-collapse border border-gray-300">
      <thead>
        <tr>
          <th class="p-2 border-b">Image</th>
          <th class="p-2 border-b">Product</th>
          <th class="p-2 border-b">Price</th>
          <th class="p-2 border-b">Quantity</th>
          <th class="p-2 border-b">Subtotal</th>
          <th class="p-2 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example Row -->
        <tr>
          <td class="p-2"><img src="image-url.jpg" alt="Product Image" class="w-12 h-12"></td>
          <td class="p-2">Product Name</td>
          <td class="p-2">$50</td>
          <td class="p-2">
            <div class="flex items-center">
              <button class="p-1 bg-gray-200">-</button>
              <input type="number" value="1" class="w-12 text-center border">
              <button class="p-1 bg-gray-200">+</button>
            </div>
          </td>
          <td class="p-2">$50</td>
          <td class="p-2">
            <button class="text-red-500">Remove</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Summary Section -->
    <div class="flex justify-end mt-6">
      <div class="w-full md:w-1/3 border p-4">
        <h2 class="text-lg font-bold mb-4">Order Summary</h2>
        <div class="flex justify-between mb-2">
          <span>Subtotal:</span>
          <span>$100</span>
        </div>
        <div class="flex justify-between mb-2">
          <span>Tax:</span>
          <span>$10</span>
        </div>
        <div class="flex justify-between font-bold text-lg">
          <span>Total:</span>
          <span>$110</span>
        </div>
        <button class="w-full bg-blue-500 text-white py-2 mt-4">Proceed to Checkout</button>
      </div>
    </div>
  </div>

