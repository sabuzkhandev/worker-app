@extends("layouts.guestLogin")
@section('page-style')

<!-- Custom styles for this template -->
<link href="{{ asset('assets/css/signin.css') }}" rel="stylesheet">

@endsection

@section('page-content')



@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif


<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <img class="mb-4" src="https://cdn-icons-png.flaticon.com/512/7141/7141726.png" alt="" width="72" height="57" style="margin:auto">
        <h1 class="h5 mb-3 fw-normal text-uppercase" style="color: #1B2E69">Please Login Account</h1>
        @if ($errors->any())
        <span class="text-danger">
            @foreach ($errors->all() as $error)
                <small>{{ $error }}</small>
            @endforeach
        </span>
        @endif
        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com">
            <label for="email">{{ __('Email') }}</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="password">{{ __('Password') }}</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remeber"> {{ __('Remember me') }}
        </label>
        </div>
        {{-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}

        <button type="submit" class="btn btn-primary btn-sm w-100" style="background-color: #1B2E69">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023-Application</p>
    </form>
</div>
@endsection


