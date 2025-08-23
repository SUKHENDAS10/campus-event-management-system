<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EventStatusNotification extends Notification
{
    use Queueable;

    protected $event;
    protected $status;

    public function __construct($event, $status)
    {
        $this->event = $event;
        $this->status = $status;
    }

    public function via($notifiable)
    {
        return ['mail']; // চাইলে database ও যোগ করতে পারেন
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello ' . $notifiable->name . ',')
                    ->line('Your event "' . $this->event->title . '" has been ' . $this->status . '.')
                    ->action('View Event', url('/events/' . $this->event->id))
                    ->line('Thank you for using our application!');
    }
}
