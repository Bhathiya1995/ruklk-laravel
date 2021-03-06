@extends('layouts.app') 



@include('layouts.wikiheader')

@section('title', '| All Posts')

@section ('content')
<div class="col-md-3 mt-5" style="float: right;">
    <a href="{{ route('posts.create')}} " class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post </a>
</div>
<div class="row">
    <div class="col-md-10 mx-5 font-weight-bold">
        <h1>All Posts</h1>
    </div>
    <div class="col-md-12">
        </hr>
    </div>
</div>
<div class="row">
    <div class="col-md-12 font-weight-bold">
        <table class="table mx-3">
            <thead>
                <th></th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th></th>

                </thead> 
            <tbody>
                @foreach ($posts as $post)

                    <tr>
                        <th>{{ $post->id}}</th>
                        <td>{{ $post->title}}</td>
                        <td>{{ substr(strip_tags($post->body),0,50) }}{{strlen ( strip_tags($post->body)) >50? "...":""}}</td>
                        <td>{{ date('M j,Y',strtotime($post->created_at))}}</td>
                        <td> <a href="{{route('posts.show',$post->id) }}"  class="btn btn-success btn-sm"><b>View</b></a> <a href="{{route('posts.edit',$post->id) }}" class="btn btn-success btn-sm"><b>Edit</b></a></td>
                    </tr>  

                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {!! $posts->links(); !!}
        </div>    
    </div>  
</div>         
@stop
        