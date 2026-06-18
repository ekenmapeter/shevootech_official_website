<?php
namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmed extends Notification
{
    use Queueable;

    public function __construct(public Order $order) {}

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Order Confirmed - ' . $this->order->reference_code)
            ->greeting('Hello ' . $this->order->user->name . '!')
            ->line('Your payment has been confirmed for:')
            ->line('Product: ' . $this->order->product->title)
            ->line('Amount: ₦' . number_format($this->order->amount, 2))
            ->line('Reference: ' . $this->order->reference_code)
            ->line('You can now download your purchase from your dashboard.')
            ->action('Download Now', url('/dashboard/download/' . $this->order->id))
            ->line('Thank you for your purchase!')
            ->line('If you have any issues, please contact support.');
    }
}
