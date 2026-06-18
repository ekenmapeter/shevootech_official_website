<?php
namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderPending extends Notification
{
    use Queueable;

    public function __construct(public Order $order) {}

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Pending Order: ' . $this->order->reference_code)
            ->line('A new order is pending verification.')
            ->line('Product: ' . $this->order->product->title)
            ->line('Amount: ₦' . number_format($this->order->amount, 2))
            ->line('Customer: ' . $this->order->user->name . ' (' . $this->order->user->email . ')')
            ->action('View Order', url('/admin/orders/' . $this->order->id . '/edit'))
            ->line('Please verify the bank transfer and mark as paid.');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'reference_code' => $this->order->reference_code,
            'amount' => $this->order->amount,
        ];
    }
}
