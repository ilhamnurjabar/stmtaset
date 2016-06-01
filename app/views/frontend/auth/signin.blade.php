@extends('backend/layouts/login')

{{-- Page title --}}
@section('title')

@parent
@stop

{{-- Page content --}}
@section('content')

    <form method="post" action="{{ route('signin') }}" class="form-horizontal">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="http://pmb.stmt-trisakti.ac.id/images/welcome_logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <h4 align="center"> STMT Trisakti Manajemen Aset </h4>
            <form class="form-signin">

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="col-md-2 col-sm-12 control-label"></label>

                        <input type="username" id="username" class="form-control" placeholder="Username" name="username" value="{{{ Input::old('username') }}}" required autofocus>


            </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-2 col-sm-12 control-label"></label>

                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="{{{ Input::old('password') }}}" required>


            </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->

        </div><!-- /card-container -->
    </div><!-- /container -->




    </form>
</div>

@stop
