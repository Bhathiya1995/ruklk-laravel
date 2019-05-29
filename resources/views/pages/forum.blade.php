@extends('layouts.forumlayout')
<div class="mb-5">
<div class="pt-5">
    @include('layouts.header')
</div>
 {{--  @section('heading',"Threads")  --}}



@section('content')
   <div class="list-group">
    
        @forelse($threads as $thread)
        <div class="ml-5 px-3 my-2 block-example border border-dark light-green lighten-4" style="border-radius: 10px;">
            <a href="{{route('thread.show',$thread->id)}}" class="list-group-itm px-3">
                <h4 class="list-group-item-heading font-weight-bold">{{$thread->subject}}</h4>
                <p class="list-group-item-text">{{str_limit($thread->thread)}} </p>
            </a>
        </div>
       
    @empty
    <h5>No Questionss</h5>

    @endforelse 
    {{--  </div>@include('pages.thread')       --}}
@endsection