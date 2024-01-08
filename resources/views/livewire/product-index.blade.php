<div>
    <!-- Your Livewire component content goes here -->
    <table class="min-w-full bg-white border rounded-md overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Brand</th>
                <th class="py-2 px-4">SKU</th>
                <th class="py-2 px-4">Stock</th>
                <th class="py-2 px-4">Product Type</th>
                <th class="py-2 px-4">Actions</th> {{-- New column --}}
            </tr>
        </thead>
        <tbody>
            {{-- Loop through your products and populate the table rows --}}
            @foreach($products as $product)
            @php
            // Extract "name" value
            $nameData = json_decode(data_get($product->attribute_data, 'name.value.en'), true);
            $productName = $nameData ? $nameData['en'] : 'N/A';
            @endphp
            <tr class="hover:bg-gray-100 transition duration-150">
                <td class="py-2 px-4 text-center">{{ $product->status }}</td>
                <td class="py-2 px-4 text-center">
                    <span id="product-name-{{ $product->id }}"></span>
                    <script>
                        // Parse JSON and extract "en" value
                        var jsonData = @json($product -> attribute_data);
                        var productName = jsonData.name.value.en;
                        document.getElementById('product-name-{{ $product->id }}').innerText = productName;
                    </script>
                </td>
                <td class="py-2 px-4 text-center">{{ optional($product->brand)->name ?? 'N/A' }}</td>
                <td class="py-2 px-4 text-center">{{ optional($product->variants)->sku ?? 'N/A' }}</td>
                <td class="py-2 px-4 text-center">{{ optional($product->variants)->stock ?? 'N/A' }}</td>
                <td class="py-2 px-4 text-center">{{ optional($product->productType)->name ?? 'N/A' }}</td>
                <td class="py-2 px-4 space-x-2 text-center">
                    {{-- Edit action buttons --}}
                    <a href="{{ route('hub.products.show', ['product' => $product->id ?? '']) }}"
                        class="text-blue-500 hover:underline">Edit</a>
                    {{-- Add more actions as needed --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>