<?php
namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class ExpirePendingOrders extends Command
{
    protected $signature = 'orders:expire-pending';
    protected $description = 'Cancel orders left pending for more than 48 hours';

    public function handle(): void
    {
        $count = Order::where('status', 'pending')
            ->where('created_at', '<', now()->subHours(48))
            ->update(['status' => 'expired']);

        $this->info("Expired {$count} pending order(s).");
    }
}
