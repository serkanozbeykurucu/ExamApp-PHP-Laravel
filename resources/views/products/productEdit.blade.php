@extends('layouts.admin')
@section('content')
<div class="p-4 bg-light">
    <form action="{{ route('products.productUpdate', ['id' => $product->id]) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}"required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <input type="text" class="form-control" name="description" value="{{ $product->description }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline is-valid my-3">
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline is-valid my-3">
                    <input type="text" class="form-control" name="stock" value="{{ $product->stock }}" required>
                </div>
            </div>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="status" name="status" {{ $product->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Status</label>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection