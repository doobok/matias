<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Notifications\LeadEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TelegramNewLead;

class LeadsController extends Controller
{
    public function sendPhone(Request $request)
    {

        // notifications
        // if (setting('site.env') ===  'production') {

        // формируем сообщение
        $phone = '+38' . $request->phone;
        $name = $request->name;
        //telegram notification
        Notification::route('mail', config('app.administrator_mail'))
            ->notify((new LeadEmailNotification($name, $phone))->locale('ru'));

//        Notification::send('', new TelegramNewLead($name, $phone));
        // }

        return response()->json(['success' => 'true']);
    }
}
