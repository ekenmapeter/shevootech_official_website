<?php
namespace App\Services\Delivery;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class SignedDownloadService
{
    public function generateUrl(Order $order, int $expiresInMinutes = 15): string
    {
        $product = $order->product;
        $media = $product->getFirstMedia('digital-file');

        if (!$media) {
            throw new \RuntimeException('No digital file found for product #' . $product->id);
        }

        if (config('filesystems.disks.r2.enabled', false)) {
            $disk = Storage::disk('r2');
            $path = $media->getPathRelativeToRoot();
            return $disk->temporaryUrl($path, now()->addMinutes($expiresInMinutes));
        }

        return Storage::disk('public')->url($media->getPathRelativeToRoot());
    }
}
