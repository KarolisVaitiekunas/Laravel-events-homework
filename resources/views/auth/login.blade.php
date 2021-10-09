@extends('layouts.app')

@section('content')
    <div class="specificMain">
        <div>
            @if (session('status'))
                <div  class="status">
                    {{ session('status') }}
                </div>
            @endif
                <div class="auth_form_login">
                    <form action="{{route("login")}}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email" placeholder="Your email">

                            @error('email')
                            <div  class="error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" placeholder="Choose a password">

                            @error('password')
                            <div class="error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" name="remember" id="remember" class="mr-2">
                                <label for="remember">Remember me</label>
                            </div>
                        </div>

                        <div>
                            <button class="specific-button" type="submit">Login</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
@endsection
