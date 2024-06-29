<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Visual - Mobile Phone Marketplace</title>
</head>

<body>

  <div class="container">
    <h1>Sales</h1>
    @foreach($orders as $order)
        <a class="card mb-3 text-decoration-none" href="{{ route('store.sales.show', $order->id) }}">
            <div class="card-header">
                Order #{{ $order->id }} - Total: ${{ $order->total_price }}
            </div>
            <div class="card-body">
                <p><strong>User:</strong> {{ $order->user->first_name . ' ' . $order->user->first_name }}</p>
                <p><strong>Success Date:</strong> {{ $order->updated_at }}</p>
                <p><strong>Shipping Method:</strong> {{ $order->shipping_method }}</p>
                <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                <p><strong>Total Price:</strong> ${{ $order->total_price }}</p>
                <h5>Products:</h5>
                <ul>
                    @foreach($order->orderItems as $item)
                        <li>{{ $item->product->name }} - Quantity: {{ $item->quantity }} - Price: ${{ $item->price }}</li>
                    @endforeach
                </ul>
            </div>
        </a>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>