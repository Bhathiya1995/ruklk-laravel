@extends('layouts.app') 

{{-- @section('title'.'|Homepage') --}}

@include('layouts.wikiheader')
@section('content')

{{--         
    <div class="row" >
            <div class="col-md-12 ">
               <div class="jumbotron  "> 
                  <div class="mask rgba-white-strong d-flex justify-content-center">
                     <h1 class='topic' align="center">Welcome to Ruk wiki</h1>

                  </div>

            
              </div>
            </div>
            
    </div> <!-- end of row --> --}}
  <div class="view jarallax intro " data-jarallx='{"speed":0.5}' style="background-image: url('../wikiimages/wiki back.jpg'); height:50%" >
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

     
  <div class="my-5 row container-fluid justify-content-center">
         <div class="col-md-8">
             
            @foreach($posts as $post)
         <div class="block-example border solid postborder px-2 py-2" >
               <div class="post ">
                     <h3 class="font-weight-bold">{{ $post-> title}}</h3>
                        <p class="dark-grey-text px-2 pt-1 "> {{ substr(strip_tags($post->body),0 ,300) }} {{strlen( strip_tags($post-> body)) >300 ?"...": ""}}</p>
                        <div class="">
                           <p class="text-right">  <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-success">Read More</a> </p>
                        </div>
               </div>
         </div>
          
      <hr>

      @endforeach


      </div>
         <div class="col-md-3 col-md-offset-1 ml-5">
            <h2>Categories</h2>

            @foreach($categories as $category)
              <div class="card mt-2 ">
                <div class="card-body">
                  <img class="card-img-top" src="{{asset('wikiimages/'.$category->name.'.jpg')}}">
                    <h6 class="mt-2 mb-1 text-center"><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a></h6>
                </div>
              </div>
            @endforeach
</div>

 




         </div>

      </div>


      

@stop


