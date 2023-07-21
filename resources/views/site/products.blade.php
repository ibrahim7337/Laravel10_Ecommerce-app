@extends('site/layout')
@section('content')
    <div class="row">
        @foreach ($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top: 10px">
            <div class="img_thumbnail productlist">
                <img src="{{asset($product->image)}}" alt="img-fluid">
                <div class="caption">
                    <h4>{{$product->name}}</h4>
                    <p>{{$product->description}}</p>
                    <p><strong>Price: </strong> {{$product->price}}</p>
                    <div class="btn-holder"><a href="{{route('add_to_cart' , $product->id)}}" class="btn btn-primary btn-block text-center">Add to cart</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
