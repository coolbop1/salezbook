@extends('layouts.app-master')

@section('content')
        <!-- Page Header End -->
        <div class="page-header">   
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Sign In</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <div style="background-color: #dfe2db; width: 60%;  margin:auto; padding: 20px">
            <form method="post" action="{{ route('login.perform') }}">
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <!-- <img class="mb-4" src="{!! url('images/logo.jpg') !!}" alt="" width="72"> -->
                
                <!-- <h1 class="h3 mb-3 fw-normal">Login</h1> -->

                @include('layouts.partials.messages')

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email or Username</label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                
                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button class="btn-lg btn btn-warning" type="submit">Login</button>
            </form>
        </div>
@endsection