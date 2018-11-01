@extends('layouts.app')
<div class="mb-5">
    @include('layouts.header')
</div>
@section('content')

<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
            <div class="card-body pb-1 container">
                <form class="form-inline active-cyan-4" action="/products/searchproduct">   
                    <input class="form-control form-control-sm mr-3 w-75 h-30" type="text" placeholder="Search" aria-label="Search" name="search">
                    <select class="browser-default custom-select mr-3" name="type">
                        <option value="all">All</option>
                        <option value="land">Lands</option>
                        <option value="tree">Trees</option>
                        <option value="seed">Seeds</option>
                    </select>
                    <button class="btn-sm btn-success w-20 h-20" value="Search"><i class="fa fa-search" aria-hidden="true"></i>Search</button>   
                </form>
            </div>
        </div>
            
        </div>

    </div>
       
</div>

<div class="row mt-2">
    <div class="col-md-3 pl-4">
        <div class="card">
            <div class="card-body">
                <h2 class="grey-text d-flex justify-content-center">Advertisments</h2>
                <hr>
                <hr>
                <a href="" type="button" class="btn btn-success d-flex justify-content-center">Post Advertisments</a>
            </div>
        </div>
    </div>


    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                @if(count($searchproduct)>0)
                
                    @foreach($searchproduct as $searchproduct)
                    <div class="row border border-succes my-2 mx-2"> 
                        <div class="col-md-3">
                            <img src= "{{asset('Products/'.$searchproduct->productImage)}}" class="w-75" alt="sample photo" >  
                        </div>
                        <div class="col-md-8">
                            <h3 class="text-capitalize my-4">{{$searchproduct->productName}}</h3 >
                            <p class='px-3'>{{$searchproduct->productDescription}}</p>
                            <p class="text-right"> <a class="green-text" href="searchproduct/{{$searchproduct->id}}">See More..</a></p>
                        </div>
                    </div>    
                        
                    @endforeach
                @else
                    <p class="d-flex justify-content-center"> Sorry !!! No matching items </p>
                @endif
            
            </div>
        </div>
    </div>
</div> 






@include('layouts.footer')