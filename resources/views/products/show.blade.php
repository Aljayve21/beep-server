@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Patient Information</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ben no.</label>
            <input type="text" name="id" class="form-control" placeholder="Bed NO." value="{{ $product->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" placeholder="age" value="{{ $product->age }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Gender</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->gender }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Condition</label>
            <input type="text" name="condition" class="form-control" placeholder="Condition" value="{{ $product->condition }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Heart Rate</label>
            <textarea class="form-control" name="heart_rate" placeholder="Heart Rate" readonly>{{ $product->heart_rate }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Respiratory Rate</label>
            <input type="text" name="resperatory_pressure" class="form-control" placeholder="Respiratory Rate" value="{{ $product->resperatory_pressure }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Blood Pressure</label>
            <textarea class="form-control" name="blood_pressure" placeholder="Blood Pressure" readonly>{{ $product->blood_pressure }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Temperature</label>
            <input type="text" name="temperature" class="form-control" placeholder="Temperature" value="{{ $product->temperature }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection