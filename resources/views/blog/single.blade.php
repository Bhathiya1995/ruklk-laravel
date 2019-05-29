@extends('layouts.app')

@section('title'."|  $post-> title")
@include('layouts.wikiheader')
@section('content')

<div class="row my-5 d-flex justify-content-center">
    <div class="col-md-8 col-md-offset-2">
         <img class="my-5 img-thumbnail" src="{{ asset('wikiimages/' . $post->image) }}" height="400" width="800"/> 
        <h1 class="font-weight-bold text-center pb-2"> {{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
        <hr>
         <p>Posted In: {{ $post->category->name}}</p>  
    </div>    
</div>




 @endsection  