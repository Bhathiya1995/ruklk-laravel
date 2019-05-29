@extends('layouts.forumlayout')
<div class="pt-5">
    @include('layouts.header')
</div>

@section('content')

    <h4 class="font-weight-bold">{{$thread->subject}}</h4>
    <hr>


    <div class="thread-details">
        <h4>{{$thread->thread}}</h4>
    
    </div>
    <hr>
{{--Answer/comment--}}
    <div class="comment-list">
        <h3>Comments</h3>
        <div class="ml-5">
        @foreach($thread->comments as $comment)
        <h4 style="font-size: 18px; border-radius:5px;" class="my-3 block-example border border-dark py-2 px-2">{{$comment->body}} </h4>
        @endforeach
        </div>
        <br><br>
    </div>
    <div class="comment-form">
        <form action="{{route('threadcomment.store', $thread->id)}}" method="post" role="form">
            {{ csrf_field() }}
            <legend>Create Comment</legend>
            
        
        <div class="form-group">
            
            <input type="text" class="form-control" name="body" id="" placeholder="Input...">

        </div>

        <button type="submit" class="btn btn-primary">Comment</button>
        </form>
    </div>
   



@endsection