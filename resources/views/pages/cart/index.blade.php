@extends('layouts.app')

@section('title')
    View Cart
@endsection

@section('content')
    <div class="container mt-5 px-2">
        <div class="table-responsive mt-5">
            <table class="table table-responsive table-borderless">

                <thead>
                    <tr class="bg-light">
                        <th scope="col" colspan="2"></th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $item)
                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <tr>
                                <th colspan="2"><input class="form-check-input" type="checkbox"></th>
                                <td>{{ $item->product->name }}<br>{{ $item->product->category->name }}</td>
                                <td><input name="qty" type="number" style="width:100px !important"
                                        value="{{ $item->qty }}" class="form-control w-10" size="20"></td>
                                <td>{{ $item->product->price }}</td>
                                <td>{{ $item->product->price * $item->qty }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-warning me-2">Update</button>
                                        </form>
                                        <form method="post" action="{{ route('cart.destroy', $item->id) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                                </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
