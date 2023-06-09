@extends('layouts.app')

@section('content')
<div class="container">
    <!--Projects list -->
    <div class="row flex-column justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-white">products show</h2>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('admin.products.index') }}" class="fs-5 btn btn-light blue-01 me-3">Create</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">description</th>
                        <th scope="col">
                            <i class="fa-solid fa-hammer"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td><img class="img-show" src="{{ $product->image_link}}" alt="{{ $product->name }}"></td>
                            <td>{{ $product->price }} &euro;</td>
                            <td>{{ $product->description }}</td>
                            <td class="d-flex justify-content-start flex-wrap">
                                <a href="{{ route('admin.products.edit', $product->slug) }}"
                                    class="btn btn-success m-1">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn btn btn-danger m-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>
@include('partials.modal')

@endsection
