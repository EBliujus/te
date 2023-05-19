@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Add Story</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products-store') }}" method="post">

                            <div class="container">
                                <div class="row ">
                                    <div class="col-8">

                                        <div class="mb-3">
                                            <label class="form-label">Story name</label>
                                            <input type="text" class="form-control" name="title" value={{ old('title') }}>
                                            <div class="form-text">Your story name</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <input type="text" class="form-control" name="description" value={{ old('description') }}>
                                            <div class="form-text">Tell Us about your situation</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Choose Category</label>
                                        <select class="form-select --cat--select" name="cat_id" data-url="{{route('products-stories')}}" 
                                        {{-- data-url-name="{{route('products-color-name')}}"> --}}
                                            <option value="0">Cats list</option>
                                            @foreach($cats as $cat)
                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                        <div class="col-12">
                                            <div class="stories-selector --stories--selector">
                                        
                                            </div>
                                        </div>
                                        <div class="form-text">Pick category which fits for you</div>
                                    </div>

                                    <div class="col-4">

                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fund Amount needed</label>
                                            <input type="text" class="form-control" name="price" value={{ old('price') }}>
                                            <div class="form-text">How much money do you need?</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection