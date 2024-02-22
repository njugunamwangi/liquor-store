<?php

namespace App\Livewire\Wishlist;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Show extends Component
{
    public $wishlist;

    public Product $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        if (Auth::check()) {
            $this->wishlist = Wishlist::query()
                ->where('user_id', '=', auth()->user()->id)
                ->get();
        } else {
            $this->wishlist = null;
        }

        return view('livewire.wishlist.show', ['wishlist' => $this->wishlist]);
    }

    public function removeFromWishlist(int $productId)
    {
        if (! Auth::check()) {
            Toaster::info('Please login to proceed.');
        } else {

            if ($this->product->where('id', $productId)->where('status', 1)->exists()) {

                $model = Wishlist::query()
                    ->where('user_id', '=', auth()->user()->id)
                    ->where('product_id', '=', $productId)
                    ->first();

                if ($model) {

                    $model->delete();
                    $this->dispatch('WishlistUpdated');

                    Toaster::success('Product removed from wishlist.');
                } else {
                    Toaster::warning('Product was not removed from wishlist.');
                }
            } else {
                Toaster::danger('Product does not exist.');

            }
        }
    }
}
