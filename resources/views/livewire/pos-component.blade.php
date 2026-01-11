<div class="flex flex-col md:flex-row gap-4 p-4">
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 w-full md:w-2/3">
        @foreach($products as $product)
        <div class="card bg-base-100 shadow-xl border border-base-200">
            <div class="card-body p-4">
                <h2 class="card-title text-sm">{{ $product->name }}</h2>
                <p class="text-primary font-bold">Rp {{ number_format($product->price) }}</p>
                <div class="card-actions justify-end">
                    <button wire:click="addToCart({{ $product->id }})" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="w-full md:w-1/3">
        <div class="card bg-base-200 p-4 sticky top-4">
            <h2 class="text-xl font-bold mb-4 italic">🛒 Keranjang</h2>
            <table class="table w-full">
                @foreach($cart as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['qty'] }}x</td>
                    <td>{{ number_format($item['price'] * $item['qty']) }}</td>
                </tr>
                @endforeach
            </table>
            <div class="divider"></div>
            <div class="flex justify-between font-bold text-lg">
                <span>Total:</span>
                <span>Rp {{ number_format($this->total) }}</span>
            </div>
            <button class="btn btn-success btn-block mt-4 text-white">Bayar Sekarang</button>
        </div>
    </div>
</div>