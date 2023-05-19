@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Destination</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('cats-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Destination</label>
                            <input type="text" class="form-control" name="country" value={{old('country')}}>
                            <div class="form-text">Please add destination here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Season</label>
                            <input type="text" class="form-control" name="season" value={{old('season')}}>
                            <div class="form-text">Season type</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection