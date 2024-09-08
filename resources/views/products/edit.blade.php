@extends('layouts.app')
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-4">
                <h3 class="text-muted">Product Edit #{{$product->name}}</h3>
                <form method="POST" enctype="multipart/form-data" action="/products/{{$product->id}}/update">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{old('name', $product->name)}}" />
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control"
                            rows="4">{{old('description', $product->description)}}</textarea>
                        @if($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control" value="{{old('image')}}" />
                        @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection