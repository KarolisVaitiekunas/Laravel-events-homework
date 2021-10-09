@extends('layouts.app')

@section("content")
    <div class="main">
        <section>
            @if($posts->count())
                <div class="box">
                    <img class="latest-image" src="{{asset('/images/'.$posts[0]->image)}}" alt="event image">
                </div>
                <div class="box">
                    <h2> {{$posts[0]->title}}</h2>
                    <h4>{{$posts[0]->body}}</h4>
                    <form action="{{route("post", $posts[0])}}" method="get" class="mr-1">
                        <button type="submit">More & registration</button>
                    </form>
                    <input name="date" id="date" type="date" class="form-control" placeholder="Date of birth" disabled="true" value="{{$posts[0]->date}}"/>
                </div>
            @else
                There are no events
            @endif

        </section>
        <section>
            <div class="box">
                <p> All events in one place.</p>
            </div>
        </section>
        <section>
            @if($posts->count())
               @foreach($posts as $post)
                    <div class="box">
                        <h2>{{$post->title}}</h2>
                        <h4>{{$post->body}}</h4>
                        <form action="{{route("post", $post)}}" method="get" class="mr-1">
                            <button type="submit" class="text-blue-500">More & registration</button>
                        </form>
                        <input name="date" id="date" type="date" class="form-control" placeholder="Date of birth" disabled="true" value="{{$post->date}}"/>
                    </div>
                @endforeach
                   {{$posts->links()}}
            @else
                <p>There are no events</p>
            @endif
        </section>
    </div>
@endsection
