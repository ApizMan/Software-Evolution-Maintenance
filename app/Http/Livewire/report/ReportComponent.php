<?php

namespace App\Http\Livewire\report;

use Livewire\Component;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ReportComponent extends Component
{
    public function render()
    {
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_days' => 30,
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Users by names',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\User',
            'group_by_field' => 'name',
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];

        $chart2 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Transactions by dates',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Product',
            'group_by_field' => 'transaction_date',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'amount',
            'chart_type' => 'line',
        ];

        $chart3 = new LaravelChart($chart_options);

        return view('livewire.report.report-component', compact('chart1', 'chart2', 'chart3'))->layout('layouts.coordinator');
    }
}
