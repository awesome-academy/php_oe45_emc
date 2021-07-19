<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class NotificationAdminOrderWaitingConfirmTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIsAvailableInTheScheduler()
    {
        /** @var \Illuminate\Console\Scheduling\Schedule $schedule */
        $schedule = app()->make(\Illuminate\Console\Scheduling\Schedule::class);
    
        $events = collect($schedule->events())->filter(function (\Illuminate\Console\Scheduling\Event $event) {
            return stripos($event->command, 'command:orderwaitingconfirm');
        });
    
        if ($events->count() == 0) {
            $this->fail('No events found');
        }
    
        $events->each(function (\Illuminate\Console\Scheduling\Event $event) {
            // This example is for hourly commands.
            $this->assertEquals('0 17 * * *', $event->expression);
        });
    }
}
