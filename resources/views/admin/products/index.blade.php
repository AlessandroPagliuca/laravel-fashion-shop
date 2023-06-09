@extends('layouts.app')

@section('content')
<div class="container">
    <!--Projects list -->
    <div class="row flex-column justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-white">products list</h2>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('admin.products.create') }}" class="fs-5 btn btn-light blue-01 me-3">Create</a>
                    <a href="{{ route('admin.dashboard') }}" class="fs-5 btn btn-secondary text-white">Go Dashboard</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">
                            <i class="fa-solid fa-hammer"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td><img class="img-table"  src="{{ $product->image_link}}" alt="{{ $product->name }}"></td>
                            <td>{{ $product->price }} &euro;</td>
                            <td class="d-flex justify-content-start flex-wrap">
                                <a href="{{ route('admin.products.show', $product->slug) }}"
                                    class="btn btn-warning m-1">Show</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
