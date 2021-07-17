<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderWaitingConfirmNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Pusher\Pusher;

class OrderWaitingConfirmCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:orderwaitingconfirm';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notification for admin about orders wating confirm everyday at 17:00';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $getOrdersStatusWaitingConfirm = Order::where('status', config('showitem.status_order.pending'))->get();
        $amount = count($getOrdersStatusWaitingConfirm);
        if ($amount == 0) {
            $data = "No more orders waiting for confirmation";
        } else {
            $data = "There are ${amount} orders left waiting for confirmation";
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('OrderWaitingConfirmNotification', 'send-notification', $data);
        $userSchema = User::where('role_id', config('showitem.role.admin'))->get();
        Notification::send($userSchema, new OrderWaitingConfirmNotification($data));
    }
}
