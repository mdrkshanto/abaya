<x-admin.index title="Oreder Detail">
    <div class="card card-body">
        <table class="table table-striped table-sm text-center">
            <tbody>
                <tr>
                    <th>Customer Name</th>
                    <td>{{ $order->name }}</td>
                </tr>
                <tr>
                    <th>Customer Mobile</th>
                    <td>{{ $order->mobile }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $order->address }}</td>
                </tr>
                <tr>
                    <th>Measurement Unit</th>
                    <td>{{ $order->unit }}</td>
                </tr>
                <tr>
                    <th>Sleeves From Shoulder</th>
                    <td>{{ $order->sleeves_from_shoulder }}</td>
                </tr>
                <tr>
                    <th>Sleeves From Neck</th>
                    <td>{{ $order->sleeves_from_neck }}</td>
                </tr>
                <tr>
                    <th>Sleeves From Width</th>
                    <td>{{ $order->sleeves_width }}</td>
                </tr>
                <tr>
                    <th>Arms</th>
                    <td>{{ $order->arms }}</td>
                </tr>
                <tr>
                    <th>Bust</th>
                    <td>{{ $order->bust }}</td>
                </tr>
                <tr>
                    <th>Waist</th>
                    <td>{{ $order->waist }}</td>
                </tr>
                <tr>
                    <th>Hip</th>
                    <td>{{ $order->hip }}</td>
                </tr>
                <tr>
                    <th>Abaya Length</th>
                    <td>{{ $order->item_length }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ ucwords($order->status) }}</td>
                </tr>
            </tbody>
        </table>
        <form action="{{ route('order.status', $order->id) }}" method="post">
            @csrf
            <div class="row justify-content-center my-5">
                <div class="col-12 mb-2">
                    <label for="status" class="form-label">Change Status</label>
                    <input type="text" name="status" class="form-control shadow-none" placeholder="Change Status"
                        value="{{ $order->status }}" />
                    @error('status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button class="col-md-4 btn btn-primary shadow-none" type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-admin.index>
