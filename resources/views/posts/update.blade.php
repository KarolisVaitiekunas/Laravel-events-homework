
@extends('layouts.app')

@section('content')
    <div class="specificMain">
        <div class="auth_form_post">
            @auth
                <form action="{{route("post.update", $post)}}" method="post" class="mb-4" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="body" class="sr-only">title</label>
                        <textarea name="title" id="title" cols="30" rows="1" placeholder="Enter event title">{{$post->title}}</textarea>

                        @error('body')
                        <div class="error">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" placeholder="Enter event description">{{$post->body}}</textarea>

                        @error('body')
                        <div class="error">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <input min="2000-01-01" max="2030-12-31" name="date" id="date" type="date" value="{{$post->date}}" placeholder="Date of birth"/>
                    </div>

                    <div>
                        <div>
                            <input type="file" name="image">
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
