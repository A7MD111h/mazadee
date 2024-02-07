<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class winAuctionNotification extends Notification
{
    use Queueable;
    private $auction_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($auction_id)
    {
        $this->auction_id=$auction_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
            'auction_id'=>$this->auction_id,
        ];
    }
}
