@extends('layout.main')

@section('content')
    <div class="site-section" style="background-color: #e9e9e9;">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>Register</h4>
                <hr/>
                <form method="POST" action="/users">
                    @csrf
                    <div class="form-group">
                      <label for="name"> Name </label>
                      <input type="text" class="form-control" name="name" placeholder="Enter name" id="name" value="{{old('name')}}" />
              
                      @error('name')
                      <p style="color:#e72424fa;">{{$message}}</p>
                      @enderror
                    </div>
              
                    <div class="mb-6">
                      <label for="email" >Email</label>
                      <input type="email" class="form-control" name="email" value="{{old('email')}}" />
              
                      @error('email')
                      <p style="color:#e72424fa;">{{$message}}</p>
                      @enderror
                    </div>
              
                    <div class="mb-6">
                      <label for="password" >
                        Password
                      </label>
                      <input type="password" class="form-control" name="password" value="{{old('password')}}" />
              
                      @error('password')
                      <p style="color:#e72424fa;">{{$message}}</p>
                      @enderror
                    </div>
              
                    <div class="mb-6">
                      <label for="password2" >
                        Confirm Password
                      </label>
                      <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" />
              
                      @error('password_confirmation')
                      <p style="color:#e72424fa;">{{$message}}</p>
                      @enderror
                    </div>
                    <br/>
                    <div class="mt-8">
                      <p>
                        Already have an account?
                        <a href="/login" class="text-laravel">Login</a>
                      </p>
                    </div>
                    <br/>
                    <div class="mb-6">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <input type="reset" class="btn btn-secondary" value="Reset" />
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection