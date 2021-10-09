
@extends('layouts.app')

@section('content')
    <div class="specificMain">
        <div class="auth_form_post">
            @auth
                <form action="{{ route('posts') }}" method="post" class="mb-4" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="body" class="sr-only">title</label>
                        <textarea name="title" id="title" cols="30" rows="1" class="bg-gray-100 border-2 w-full p-4 rounded-lg " placeholder="Enter event title"></textarea>

                        @error('body')
                        <div class="error">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg " placeholder="Enter event description"></textarea>

                        @error('body')
                        <div class="error">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <input min="2000-01-01" max="2030-12-31" name="date" id="date" type="date" class="form-control" placeholder="Date of birth"/>
                    </div>

                    <div>
                        <div>
                            <input type="file" name="image" class="form-control">
                        </div>
                        @error('image')
                        <div class="error">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button class="specific-button" type="submit">Create event</button>
                    </div>
                </form>
            @endauth


        </div>
    </div>
@endsection
