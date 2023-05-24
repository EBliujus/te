@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Offer List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($products as $product)
                        <li class="list-group-item">
                            <div class="cat-line">
                                <div class="cat-info">

                                    <div style="display:flex; margin-right: 10px">
                                        <h4 style="margin-right: 5px">{{$product->ProductbyCat->country}} </h4>
                                        <h6   class="--random--color" style="align-items: center; justify-content:center">{{$product->ProductbyCat->season}}</h6>
                                    </div>

                                    <h2>{{$product->title}}</h2>
                                    <div class="cat-description --random--color">
                                        <p>
                                            {{$product->description}}
                                        </p>
                                        <p>{{$product->price}}</p>
                                        <p>{{$product->days}}</p>
                                        
                                        
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('cats-edit', $product)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('cats-delete', $product)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <div class="cat-line">No cats</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection