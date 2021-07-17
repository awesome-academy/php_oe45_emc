<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Order;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class StatisticalOrderAYearChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $year = Carbon::now()->format('Y');
        $orderJanuary = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.january'))
            ->count();
        $orderFebruary = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.february'))
            ->count();
        $orderMarch = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.march'))
            ->count();
        $orderApril = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.april'))
            ->count();
        $orderMay = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.may'))
            ->count();
        $orderJune = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.june'))
            ->count();
        $orderJuly = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.july'))
            ->count();
        $orderAugust = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.august'))
            ->count();
        $orderSeptember = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.september'))
            ->count();
        $orderOctober = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.october'))
            ->count();
        $orderNovember = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.november'))
            ->count();
        $orderDecember = Order::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', config('showitem.month.december'))
            ->count();
        

        return Chartisan::build()
            ->labels(
                [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December',
                ]
            )
            ->dataset(
                'data',
                [
                    $orderJanuary,
                    $orderFebruary,
                    $orderMarch,
                    $orderApril,
                    $orderMay,
                    $orderJune,
                    $orderJuly,
                    $orderAugust,
                    $orderSeptember,
                    $orderOctober,
                    $orderNovember,
                    $orderDecember,
                ]
            );
    }
}
