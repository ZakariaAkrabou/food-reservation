<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

     public $reservation;

     
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('New reservation')
                ->line('A new reservation has been made.')
                ->line('Details:')
                ->line('Name: ' . $this->reservation->firstname . ' ' . $this->reservation->lastname)
                ->line('Email: ' . $this->reservation->email)
                ->line('Reservation Date: ' . $this->reservation->reservation_date)
                ->line('Table ID: ' . $this->reservation->table_id)
                ->line('Guest Number: ' . $this->reservation->guest_number);
                
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}