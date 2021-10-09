@extends('layouts.app')

@section("content")
    <div class="specificMain">
        @if (session('status'))
            <div  class="status">
                {{ session('status') }}
            </div>
        @endif
        <div class="auth_form_register">
            <form action="{{route("register")}} " method="post">
                @csrf
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name">

                    @error('name')
                    <div  class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email">

                    @error('email')
                    <div  class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password">

                    @error('password')
                    <div  class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password">

                    @error('password_confirmation')
                    <div  class="error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <button class="specific-button" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
