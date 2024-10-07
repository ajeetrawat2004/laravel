@extends('products.layout')
     
@section('content')
<div class="card mt-5">
  <h2 class="card-header">Edit Product</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                value="{{ $product->name }}"
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
            <input 
                type="text" 
                name="email" 
                value="{{ $product->email }}"
                class="form-control @error('email') is-invalid @enderror" 
                id="inputEmail" 
                placeholder="Email">
            @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputPassword" class="form-label"><strong>Password:</strong></label>
            <input 
                type="text" 
                name="password" 
                value="{{ $product->password }}"
                class="form-control @error('password') is-invalid @enderror" 
                id="inputPassword" 
                placeholder="Password">
            @error('password')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputdob" class="form-label"><strong>DOB:</strong></label>
            <input 
                type="text" 
                name="dob" 
                value="{{ $product->password }}"
                class="form-control @error('password') is-invalid @enderror" 
                id="inputdob" 
                placeholder="DOB">
            @error('dob')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputAddress" class="form-label"><strong>Address:</strong></label>
            <input 
                type="text" 
                name="address" 
                value="{{ $product->address }}"
                class="form-control @error('address') is-invalid @enderror" 
                id="inputAddress" 
                placeholder="Address">
            @error('address')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputPhoneNumber" class="form-label"><strong>Phone Number:</strong></label>
            <input 
                type="text" 
                name="phonenumber" 
                value="{{ $product->phonenumber }}"
                class="form-control @error('phonenumber') is-invalid @enderror" 
                id="inputPhoneNumber" 
                placeholder="PhoneNumber">
            @error('phonenumber')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputGender" class="form-label"><strong>Gender:</strong></label>
            <select 
                class="form-control @error('gender') is-invalid @enderror" 
                name="gender" 
                id="inputGender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            @error('gender')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <div class="mb-3">
            <label for="inputImage" class="form-label"><strong>Image:</strong></label>
            <input 
                type="file" 
                name="image" 
                class="form-control @error('image') is-invalid @enderror" 
                id="inputImage">
            <img src="/images/{{ $product->image }}" width="300px">
            @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>
  
  </div>
</div>
@endsection
