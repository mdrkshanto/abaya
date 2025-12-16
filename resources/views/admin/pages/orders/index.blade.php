<x-admin.index title="Orders">
    <div class="card card-body">
        <table class="table table-sm table-striped text-center table-responsive">
            <h1 class="text-muted text-center">Your order list</h1>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Customer Mobile</th>
                    <th>Customer Address</th>
                    <th>Status</th>
                    <th>Order Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="fw-bolder">{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->mobile }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ ucwords($order->status) }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-link link-info" href="{{ route('order', $order->id) }}">
                                    <i class="align-middle" data-feather="book-open"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.index>
