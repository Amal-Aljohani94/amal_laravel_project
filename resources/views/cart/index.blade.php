@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Shopping Cart</h1>
            @if(count($cartItems) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td>{{ $item->productname }}</td> <!-- Assuming 'product_name' is the property for product name -->
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->qty }}</td> <!-- Assuming 'quantity' is the property for quantity -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>
    </div>
</div>
@endsection
