<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Order;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class StatisticalOrderChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $zero = Carbon::now()->format('Y-m-d 00:00:00');
        $one = Carbon::now()->format('Y-m-d 01:00:00');
        $two = Carbon::now()->format('Y-m-d 02:00:00');
        $three = Carbon::now()->format('Y-m-d 03:00:00');
        $four = Carbon::now()->format('Y-m-d 04:00:00');
        $five = Carbon::now()->format('Y-m-d 05:00:00');
        $six = Carbon::now()->format('Y-m-d 06:00:00');
        $seven = Carbon::now()->format('Y-m-d 07:00:00');
        $eight = Carbon::now()->format('Y-m-d 08:00:00');
        $nine = Carbon::now()->format('Y-m-d 09:00:00');
        $ten = Carbon::now()->format('Y-m-d 10:00:00');
        $eleven = Carbon::now()->format('Y-m-d 11:00:00');
        $twelve = Carbon::now()->format('Y-m-d 12:00:00');
        $thirteen = Carbon::now()->format('Y-m-d 13:00:00');
        $fourteen = Carbon::now()->format('Y-m-d 14:00:00');
        $fifteen = Carbon::now()->format('Y-m-d 15:00:00');
        $sixteen = Carbon::now()->format('Y-m-d 16:00:00');
        $seventeen = Carbon::now()->format('Y-m-d 17:00:00');
        $eighteen = Carbon::now()->format('Y-m-d 18:00:00');
        $nineteen = Carbon::now()->format('Y-m-d 19:00:00');
        $twenty = Carbon::now()->format('Y-m-d 20:00:00');
        $twentyOne = Carbon::now()->format('Y-m-d 21:00:00');
        $twentyTwo = Carbon::now()->format('Y-m-d 22:00:00');
        $twentyThree = Carbon::now()->format('Y-m-d 23:00:00');
        
        $orderAt1hour = Order::whereBetween('created_at', [$zero, $one])->count();
        $orderAt2hour = Order::whereBetween('created_at', [$one, $two])->count();
        $orderAt3hour = Order::whereBetween('created_at', [$two, $three])->count();
        $orderAt4hour = Order::whereBetween('created_at', [$three, $four])->count();
        $orderAt5hour = Order::whereBetween('created_at', [$four, $five])->count();
        $orderAt6hour = Order::whereBetween('created_at', [$five, $six])->count();
        $orderAt7hour = Order::whereBetween('created_at', [$six, $seven])->count();
        $orderAt8hour = Order::whereBetween('created_at', [$seven, $eight])->count();
        $orderAt9hour = Order::whereBetween('created_at', [$eight, $nine])->count();
        $orderAt10hour = Order::whereBetween('created_at', [$nine, $ten])->count();
        $orderAt11hour = Order::whereBetween('created_at', [$ten, $eleven])->count();
        $orderAt12hour = Order::whereBetween('created_at', [$eleven, $twelve])->count();
        $orderAt13hour = Order::whereBetween('created_at', [$twelve, $thirteen])->count();
        $orderAt14hour = Order::whereBetween('created_at', [$thirteen, $fourteen])->count();
        $orderAt15hour = Order::whereBetween('created_at', [$fourteen, $fifteen])->count();
        $orderAt16hour = Order::whereBetween('created_at', [$fifteen, $sixteen])->count();
        $orderAt17hour = Order::whereBetween('created_at', [$sixteen, $seventeen])->count();
        $orderAt18hour = Order::whereBetween('created_at', [$seventeen, $eighteen])->count();
        $orderAt19hour = Order::whereBetween('created_at', [$eighteen, $nineteen])->count();
        $orderAt20hour = Order::whereBetween('created_at', [$nineteen, $twenty])->count();
        $orderAt21hour = Order::whereBetween('created_at', [$twenty, $twentyOne])->count();
        $orderAt22hour = Order::whereBetween('created_at', [$twentyOne, $twentyTwo])->count();
        $orderAt23hour = Order::whereBetween('created_at', [$twentyTwo, $twentyThree])->count();
        $orderAt24hour = Order::whereBetween('created_at', [$twentyThree, $zero])->count();

        return Chartisan::build()
            ->labels(
                [
                    '1h',
                    '2h',
                    '3h',
                    '4h',
                    '5h',
                    '6h',
                    '7h',
                    '8h',
                    '9h',
                    '10h',
                    '11h',
                    '12h',
                    '13h',
                    '14h',
                    '15h',
                    '16h',
                    '17h',
                    '18h',
                    '19h',
                    '20h',
                    '21h',
                    '22h',
                    '23h',
                    '24h'
                ]
            )
            ->dataset(
                'data',
                [
                    $orderAt1hour,
                    $orderAt2hour,
                    $orderAt3hour,
                    $orderAt4hour,
                    $orderAt5hour,
                    $orderAt6hour,
                    $orderAt7hour,
                    $orderAt8hour,
                    $orderAt9hour,
                    $orderAt10hour,
                    $orderAt11hour,
                    $orderAt12hour,
                    $orderAt13hour,
                    $orderAt14hour,
                    $orderAt15hour,
                    $orderAt16hour,
                    $orderAt17hour,
                    $orderAt18hour,
                    $orderAt19hour,
                    $orderAt20hour,
                    $orderAt21hour,
                    $orderAt22hour,
                    $orderAt23hour,
                    $orderAt24hour
                ]
            );
    }
}
