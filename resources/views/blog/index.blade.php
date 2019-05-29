@extends('layouts.app')

@section('title','| Blog '),
@include('layouts.wikiheader')
@section('content')

{{-- <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Tips to plant Trees</h1>
        <br>
    </div>
</div> --}}

<div class="view jarallax intro " data-jarallx='{"speed":0.5}' style="background-image: url('../wikiimages/wiki back.jpg'); height:49%" >
    <div class="mask rgba-green-light d-flex justyfy-content-center align-items-center"> 
          <div class="container">
                <div class="row ">
                    <div class="col-md-12 white-text text-center">
                        <h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow">Ruk
                            <a class="heartBeat white-text font-weight-bold">Wiki</a>
                        </h1>
                        <h5 class="text-uppercase pt-md-1 pt-sm-1 pt-1 pb-md-1 pb-sm-3 pb-5 white-text subtext-header mt-2 mb-4 wow fadeInDown" data-wow-delay="0.3s">Make a green world for everyone</h5>
                    </div>
                </div>
            </div>
    </div>
</div> 



@foreach ($posts as $post)
<div class="row my-5 mx-3 container" >
    <div class="col-md-8 col-md-offset-2">
        <h2>{{ $post -> title }}</h2>
        <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

        <p>{{ substr( strip_tags($post->body),0,250) }}{{ strlen(strip_tags($post->body)) > 250? '...' : ""}}</p>

        <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-success">Read More</a>
        <hr>
    </div>
</div>
@endforeach

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>
</div>            








 @endsection  