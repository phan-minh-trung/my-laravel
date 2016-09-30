<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPost;
use App\Notifications\TestDb;


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

    }
}
