<div>
    <!-- Your Livewire component content goes here -->
    <table>
        <thead>
            <tr>
                <th>Status</th>
                <th>Name</th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Stock</th>
                <th>Product Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->status }}</td>
                    <td>
                        @php
                            $name = optional(data_get($product->attribute_data, 'name.value.en'))->value ?? 'N/A';
                        @endphp
                        {{ $name }}
                    </td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->product_type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
