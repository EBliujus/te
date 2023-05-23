@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Category</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('cats-update', $cat)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Direction</label>
                            <input type="text" class="form-control" name="country" value="{{old('country', $cat->country)}}">
                            <div class="form-text">Please add direction here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="season" value="{{old('season', $cat->season)}}">
                            <div class="form-text">Season</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection