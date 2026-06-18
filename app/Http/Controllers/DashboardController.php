<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\Delivery\SignedDownloadService;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function purchases()
    {
        $orders = Auth::user()->orders()
            ->with('product')
            ->latest()
            ->paginate(10);

        return view('dashboard.purchases', compact('orders'));
    }

    public function download(Order $order, SignedDownloadService $service)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        if ($order->status !== 'paid') {
            return redirect()->route('dashboard.purchases')
                ->with('error', 'This order has not been paid yet.');
        }

        try {
            $url = $service->generateUrl($order);

            $order->downloadLogs()->create([
                'ip_address' => request()->ip(),
                'downloaded_at' => now(),
            ]);

            return view('dashboard.download', compact('url', 'order'));
        } catch (\RuntimeException $e) {
            return redirect()->route('dashboard.purchases')
                ->with('error', $e->getMessage());
        }
    }
}
