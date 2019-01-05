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
                    <button class="btn-sm btn-success w-20 h-20" value="Search"><i class="fa fa-search" aria-hidden="true"></i>Search</button>   
                </form>
            </div>
        </div>
            
        </div>

    </div>
@endsection