<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Support extends Notification
{
    use Queueable;
    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
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
                    ->subject('Customer Complain')
                    ->line('Customer Support')
                    ->line('Below are the customer details')
                    ->line('Member_ID:' . ' ' . $this->data->member_id)
                    ->line('Name:' . ' ' . $this->data->name)
                    ->line('Email:' . ' ' . $this->data->email)
                    ->line('Phone:' . ' ' . $this->data->phone)
                    ->line($this->data->message)
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
