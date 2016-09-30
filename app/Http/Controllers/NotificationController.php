<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPost;
use App\Notifications\TestDb;
use App\Notifications\TestSms;
use App\Notifications\TestSlack;


class NotificationController extends Controller
{
    //
    public function sendMail()
    {
        Log::info('User failed to login.');

        Notification::send(User::all(), new NewPost());

        echo "Sent email successfull";

        // automatically queue the delivery of the notification
        // $when = Carbon::now()->addMinutes(10);

        // $user->notify((new NewPost())->delay($when));
    }

    public function sendDb()
    {
        $user = User::find(1);

        $user->notify(new TestDb());

        // foreach ($user->notifications as $notification) {
        //     echo $notification->type;
        // }
    }

    public function sendSms()
    {
        Notification::send(User::all(), new TestSms());

        // Nexmo::message()->send([
        //     'to' => '14845551244',
        //     'from' => '16105552344',
        //     'text' => 'Using the facad to send a mesage.'
        // ]);

        // //or

        // $nexmo = app('Nexmo\Client');
        // $nexmo->message()->send([
        //     'to' => '14845551244',
        //     'from' => '16105552344',
        //     'text' => 'Using the instance to send a message.'
        // ]);
    }

    public function sendSlack()
    {
        // Notification::send(User::all(), new TestSlack());

        // // Instantiate without defaults
        $client = new \Maknz\Slack\Client('https://hooks.slack.com/services/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');

        // Instantiate with defaults, so all messages created
        // will be sent from 'Cyril' and to the #accounting channel
        // by default. Any names like @regan or #channel will also be linked.
        $settings = [
            'username' => 'test-bot',
            'channel' => '#general',
            'link_names' => true
        ];

        $client = new \Maknz\Slack\Client('https://hooks.slack.com/services/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', $settings);

        $client->send('Hello world!');
    }
}
