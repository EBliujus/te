@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Add Hotel</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products-update', $product) }}" method="post">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label class="form-label">Hotel name</label>
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                            <div class="form-text">Hotel name</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <input type="text" class="form-control" name="price" value={{ old('price') }}>
                                            <div class="form-text">Cost of the trip?</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea type="text" rows="5" cols="40" class="form-control description-hotel" name="description" value="{{ old('description') }}"></textarea>
                                            <div class="form-text">Description of the hotel</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Choose Category</label>
                                        <select class="form-select --cat--select" name="cat_id" 
                                            <option value="0">Cats list</option>
                                            @foreach($cats as $cat)
                                            <option value="{{$cat->id}}">{{$cat->country}}, {{$cat->season}}</option>
                                            @endforeach
                                        </select>
                                        <div class="col-12">
                                            <div class="stories-selector --stories--selector">
                                        
                                            </div>
                                        </div>
                                        {{-- <div class="form-text">Pick category which fits for you</div> --}}
                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label class="form-label">Days to stay</label>
                                            <input type="text" class="form-control" name="days" value={{old('days')}}>
                                            <div class="form-text">how many days?</div>
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