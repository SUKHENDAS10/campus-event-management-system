<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Event;

class EventStatusChanged extends Notification
{
    use Queueable;

    public $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function via(object $notifiable): array
    {
        return ['mail']; // চাইলে ['mail', 'database'] ও করতে পারো
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Event Status Updated')
                    ->greeting('Hello ' . $notifiable->name . ',')
                    ->line("Your event \"{$this->event->event_name}\" status has been updated to: {$this->event->status}.")
                    ->action('View Event', url('/events/' . $this->event->id))
                    ->line('Thank you for using our application!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'event_id' => $this->event->id,
            'status' => $this->event->status,
        ];
    }
}
