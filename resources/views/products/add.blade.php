@extends('layouts.admin')
@section('content')
<div class="p-4 bg-light">
    <form action="storeProduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline is-valid my-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline is-valid my-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" class="form-control" name="stock" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                    <!-- <label class="form-label">Image</label> -->
                    <input type="file" class="form-control" name="image" accept="image/*">
                </div>
            </div>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="status" name="status">
            <label class="form-check-label" for="status">Status</label>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection