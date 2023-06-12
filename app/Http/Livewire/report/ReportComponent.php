<?php

namespace App\Http\Livewire\report;

use App\Models\Product;
use Livewire\Component;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
// use Lunar\Models\Product as ModelsProduct;

class ReportComponent extends Component
{
    public function render()
    {
        $products = Product::all();

        $chart_options = [
            'chart_title' => 'Users by names',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Product',
            'group_by_field' => 'name',
            'chart_type' => 'pie',
            'filter_period' => 'month', // show users only registered this month
        ];

        $chart2 = new LaravelChart($chart_options);

        return view('livewire.report.report-component', ['products'=>$products], compact('chart2'))->layout('layouts.coordinator');
    }
}
