<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailReceived extends Notification
{
    use Queueable;
    private $email_message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email_message)
    {
        $this->email_message = $email_message;
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
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Message Received')
                    ->greeting('A user sent you a message!')
                    ->line('Name: ' . $this->email_message->name)
                    ->line('Email: ' . $this->email_message->email)
                    ->line('Message: ' . $this->email_message->message);
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
