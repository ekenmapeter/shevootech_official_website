<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Order;
use App\Models\Product;
use App\Notifications\NewOrderPending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function create(Product $product)
    {
        if (!$product->is_active) {
            return redirect()->route('store.show', $product->slug)
                ->with('error', 'This product is not available for purchase.');
        }

        $referenceCode = 'SVT-' . Str::upper(Str::random(6));

        $order = Order::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'reference_code' => $referenceCode,
            'amount' => $product->price,
            'status' => 'pending',
        ]);

        return redirect()->route('checkout.show', $order);
    }

    public function show(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $bankAccounts = BankAccount::active()->get();
        $product = $order->product;

        return view('checkout.bank_details', compact('order', 'product', 'bankAccounts'));
    }

    public function uploadProof(Request $request, Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        if ($order->status !== 'pending') {
            return back()->with('error', 'This order cannot accept proof of payment.');
        }

        $request->validate([
            'proof' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $order->addMediaFromRequest('proof')
            ->toMediaCollection('proof_of_payment');

        $admins = \App\Models\User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new NewOrderPending($order));
        }

        return redirect()->route('dashboard.purchases')
            ->with('status', 'Proof of payment uploaded. Awaiting verification.');
    }
}
