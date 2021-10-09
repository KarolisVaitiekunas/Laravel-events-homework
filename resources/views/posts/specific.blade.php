@extends('layouts.app')

@section("content")
    <div class="specificMain">
        <div class="specific-event">
            <img class="specific-image" src="{{asset('/images/'.$post->image)}}" alt="event image">
            <div class="box">
                <h1>Event: {{$post->title}}</h1>
                <h2>Description: {{$post->body}}</h2>
                @auth
                   @if(Auth()->User()->id === $post->user_id)
                        <form action="{{route("post.destroy", $post)}}" method="post" class="mr-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    @endauth
                @endauth

                <h4>Attending:</h4>
              <div class="specific-attending">
                  @foreach($guests as $guest)
                      <div class="attendant">
                          <h2> {{$guest->name}}</h2>
                          <form action="{{route("post.destroy.guest", [$guest, $post])}}" method="post" class="mr-1">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="attendant_kick">Kick</button>
                          </form>
                      </div>
                  @endforeach
              </div>

            </div>
        </div>

            @guest
                <form class="specific-form" action="{{route("post.create", $post)}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">name</label>
                        <textarea name="name" id="name" cols="30" rows="1" class="bg-gray-100 border-2 w-full p-4 rounded-lg " placeholder="Enter name"></textarea>

                        @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="body" class="sr-only">email</label>
                        <textarea name="email" id="email" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg " placeholder="Enter email"></textarea>

                        @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="body" class="sr-only">email</label>
                        <textarea name="phone_number" id="phone_number" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg " placeholder="Enter phone number"></textarea>

                        @error('phone_number')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button class="specific-button" type="submit">Register</button>
                    </div>
                </form>
            @endguest
        @if (session('status'))
            <div class="error">
                {{ session('status') }}
            </div>
        @endif

    </div>
@endsection
