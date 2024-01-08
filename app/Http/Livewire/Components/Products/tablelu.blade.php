<div>
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
            {{-- Loop through your Livewire products and populate the table rows --}}
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->product_type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
