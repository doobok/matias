<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LeadEmailNotification extends Notification
{
    use Queueable;

    private $phone;
    private $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $phone)
    {
        $this->phone = $phone;
        $this->name = $name;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail()
    {
        return (new MailMessage)
            ->subject('Новая заявка на сайте')
            ->line('Новая заявка на сайте ' . config('app.url'))
            ->line('Имя: ' . $this->name)
            ->line('Номер телефона: ' . $this->phone);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
