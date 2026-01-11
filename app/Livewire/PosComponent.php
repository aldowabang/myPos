<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produks;

class PosComponent extends Component
{
    public $products;
    public $cart = [];

    public function mount()
    {
        $this->products = Produks::all();
    }

    public function addToCart($productId)
    {
        $product = Produks::find($productId);
        
        // Logika menambah produk ke array $cart
        if(isset($this->cart[$productId])) {
            $this->cart[$productId]['qty']++;
        } else {
            $this->cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'qty' => 1
            ];
        }
    }

    public function getTotalProperty()
    {
        return collect($this->cart)->sum(fn($item) => $item['price'] * $item['qty']);
    }

}