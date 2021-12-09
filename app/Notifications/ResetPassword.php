<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPassword extends Notification
{
    use Queueable;
    public $password;
    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($password, $data)
    {
        $this->password = $password;
        $this->data = $data;
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
                    ->subject(' Reset Password request')
                    ->line('Hi' . ' ' .$this->data->name)
                    ->line('Member_ID:' . ' ' .$this->data->sponsor_code)
                    ->line('Username:' . ' ' .$this->data->username)
                    ->line('Phone:' . ' ' .$this->data->phone)
                    ->line('newly reset password is: ' . ' ' . $this->password)
                    ->action('Click here to access smartshoppers', url('https://smartshoppers.com.ng'))
                    ->line('Regards smartshoppers!');
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
