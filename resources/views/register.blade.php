@extends('layout')
@section('title','registration')
@section('body')

<div class="container">
    <form action="{{route('register.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="text" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('email')
          <span class="invalid-feedback">{{$message}}</span>
      @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password"class="form-control @if($errors->has('password')) is-invalid @endif" id="exampleInputPassword1">
          @error('password')
          <span class="invalid-feedback">{{$message}}</span>
      @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label  @if($errors->has('password')) is-invalid @endif">confirem password</label>
  <input type="password" name="password_confirmation"class="form-control" id="exampleInputPassword2">
  @error('password')
  <span class="invalid-feedback">{{$message}}</span>
@enderror
    </div>
        <div class="mb-3 form-check">
          <input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I agree</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</div>

@endsection
