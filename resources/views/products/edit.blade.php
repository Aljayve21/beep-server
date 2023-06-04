@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $product->age }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $product->gender }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Condition</label>
                <textarea class="form-control" name="condition" placeholder="Condition" >{{ $product->condition }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Heart Rate</label>
                <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $product->gender }}" >
                <label class="form-label">Respiratory Rate</label>
                <textarea class="form-control" name="resperatory_pressure" placeholder="Respiratory Rate" >{{ $product->resperatory_pressure }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Blood Pressure</label>
                <textarea class="form-control" name="blood_pressure" placeholder="Blood Pressure" >{{ $product->blood_pressure }}</textarea>
                <label class="form-label">Temperature</label>
                    <input type="text" name="temperature" class="form-control" placeholder="Temperature" value="{{ $product->temperature }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning mx-3">Update</button>
            </div>
        </div>
    </form>
@endsection