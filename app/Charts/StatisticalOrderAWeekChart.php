<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Order;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class StatisticalOrderAWeekChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        
        $monday = Carbon::now()->startOfWeek();
        $tuesday = $monday->copy()->addDay();
        $wednesday = $tuesday->copy()->addDay();
        $thursday = $wednesday->copy()->addDay();
        $friday = $thursday->copy()->addDay();
        $saturday = $friday->copy()->addDay();
        $sunday = $saturday->copy()->addDay();

        $mondayOrders = Order::where('created_at', 'LIKE', $monday->format('Y-m-d')."%")->count();
        $tuesdayOrders = Order::where('created_at', 'LIKE', $tuesday->format('Y-m-d')."%")->count();
        $wednesdayOrders = Order::where('created_at', 'LIKE', $wednesday->format('Y-m-d')."%")->count();
        $thursdayOrders = Order::where('created_at', 'LIKE', $thursday->format('Y-m-d')."%")->count();
        $fridayOrders = Order::where('created_at', 'LIKE', $friday->format('Y-m-d')."%")->count();
        $saturdayOrders = Order::where('created_at', 'LIKE', $saturday->format('Y-m-d')."%")->count();
        $sundayOrders = Order::where('created_at', 'LIKE', $sunday->format('Y-m-d')."%")->count();

        return Chartisan::build()
            ->labels(
                [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday',
                ]
            )
            ->dataset(
                'data',
                [
                    $mondayOrders,
                    $tuesdayOrders,
                    $wednesdayOrders,
                    $thursdayOrders,
                    $fridayOrders,
                    $saturdayOrders,
                    $sundayOrders,
                ]
            );
    }
}
