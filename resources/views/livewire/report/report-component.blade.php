<br><br>
<center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <h3>{{ $chart1->options['chart_title'] }}</h3>
                        {!! $chart1->renderHtml() !!}
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <h3>{{ $chart2->options['chart_title'] }}</h3>
                        {!! $chart2->renderHtml() !!}
                    </div>

                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <h3>{{ $chart3->options['chart_title'] }}</h3>
                        {!! $chart3->renderHtml() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</center>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
    {!! $chart1->renderChartJsLibrary() !!}
    {!! $chart1->renderJs() !!}
    {!! $chart2->renderChartJsLibrary() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderChartJsLibrary() !!}
    {!! $chart3->renderJs() !!}
</script>
