@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <br>

        <a href="{{ route('products.create') }}" class="btn btn-default">New Product</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Recommend</th>
                <th>Action</th>
            </tr>

           @foreach($products as $products)
            <tr>
                <td>{{$products->id}}</td>
                <td>{{$products->name}}</td>
                <td>{{$products->description}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->featured}}</td>
                <td>{{$products->recommend}}</td>
                <td>
                    <a href="{{route('products.edit',['id'=>$products->id])}}">Edit</a> |
                    <a href="{{route('products.destroy',['id'=>$products->id])}}">Delete</a>

                </td>
            </tr>
            @endforeach
        </table>

    </div>

@endsection
