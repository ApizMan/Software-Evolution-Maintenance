<div>
    <!-- Your Livewire component content goes here -->
    <table class="min-w-full border rounded-md overflow-hidden">
        <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-800 text-white">Status</th>
                <th class="py-2 px-4 bg-gray-800 text-white">Name</th>
                <th class="py-2 px-4 bg-gray-800 text-white">Brand</th>
                <th class="py-2 px-4 bg-gray-800 text-white">SKU</th>
                <th class="py-2 px-4 bg-gray-800 text-white">Stock</th>
                <th class="py-2 px-4 bg-gray-800 text-white">Product Type</th>
                <th class="py-2 px-4 bg-gray-800 text-white">Actions</th> {{-- New column --}}
            </tr>
        </thead>
        <tbody>
            {{-- Loop through your products and populate the table rows --}}
            @foreach($products as $product)
            @php
            $nameData = json_decode(data_get($product->attribute_data, 'name.value.en'));
            $productName = $nameData ? $nameData->en : 'N/A';
            @endphp
            <tr class="hover:bg-gray-100 transition duration-150">
                <td class="py-2 px-4">{{ $product->status }}</td>
                <td class="py-2 px-4">{{ $productName }}</td>
                <td class="py-2 px-4">{{ optional($product->brand)->name ?? 'N/A' }}</td>
                <td class="py-2 px-4">{{ optional($product->variants)->sku ?? 'N/A' }}</td>
                <td class="py-2 px-4">{{ optional($product->variants)->stock ?? 'N/A' }}</td>
                <td class="py-2 px-4">{{ optional($product->productType)->name ?? 'N/A' }}</td>
                <td class="py-2 px-4">
                    {{-- Edit action buttons --}}
                    <a href="{{ route('product.details', ['slug' => $product->id ?? '']) }}"
                        class="text-blue-500 hover:underline">Edit</a>
                    {{-- Add more actions as needed --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>