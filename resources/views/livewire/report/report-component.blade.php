<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:hover {
            background-color: #D6EEEE;
        }

        .container-table {
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 100px;
        }
    </style>
</head>

<br><br>
<center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <h3>{{ $chart2->options['chart_title'] }}</h3>
                        {!! $chart2->renderHtml() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</center>
<br><br>

<div class="container-table">
    <table>
        <tr>
            <th>Product Name</th>
            <th>Type of Sale</th>
            <th>Price Sale</th>
            <th>Discount</th>
            <th>Status</th>
            <th>Quantity in Inventory</th>
            <th>Notice</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->type_sale }}e</td>
                <td>{{ $product->regular_price }}</td>
                <td>{{ (($product->regular_price - $product->sale_price) * 100) / 100 }}%</td>
                @if ($product->quantity > 0)
                    <td>In Stock</td>
                @else
                    <td>Out of Stock</td>
                @endif
                <td>{{ $product->quantity }}</td>
                <td>@if ($product->quantity == 0)
                    This Item need to refill <b style="color: red;">Immediately</b>
                @elseif ($product->quantity <= 5)
                    This Item need to refill
                @else
                    -
                @endif</td>
            </tr>
        @endforeach
    </table>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
    {!! $chart2->renderChartJsLibrary() !!}
    {!! $chart2->renderJs() !!}
</script>
