@extends('layouts.forumlayout')
<div class="mb-5">
<div class="pt-5">
    @include('layouts.header')
</div>

@section('heading',"Create Thread")

@section('content')
    
    @include('pages.error')
    @include('pages.success')

    <div class="row">
        <div class="col-md-12">
            <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form" id="create-thread-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Input..." value="{{old('subject')}}">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="" placeholder="Input..." value="{{old('subject')}}">
                </div>

                <div class="form-group">
                    <label for="thread">Thread</label>
                    <input type="text" class="form-control" name="thread" id="" placeholder="Input..." value="{{old('subject')}}">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


   
        
</div>
@endsection