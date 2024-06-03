<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBookRelease extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail']; // Deliver notification via email
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('A new book has been released.')
            ->action('View Book', url('/books'))
            ->line('Thank you for using our application!');
    }
}
