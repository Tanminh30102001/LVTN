<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>Hello {{Auth::user()->name}}</h1>
    <h2>Thank you for Ordering from us</h2>
    <p>Your order has been placed successfully.</p>
    <h2>Order Details</h2>
    <p>Order ID: {{ $order->id }}</p>
    <p>Total: {{ $order->total }}</p>    
    <h3>Products Ordered</h3>
    <table>
        <thead>
            <tr> 
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Cart::instance('cart')->content() as $item)
                <tr>
                    <td>{{$item->model->name}}</td>
                    <td>${{ $item->regular_price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>${{ $item->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>If you have any questions, please contact<strong>0338386701</strong> </p>
    <p>Thank you very much and hop you have a nice day</p>
    <!-- ... Other order information ... -->
</body>
</html>