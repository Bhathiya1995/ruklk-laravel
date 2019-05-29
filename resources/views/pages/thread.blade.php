    <div class="list-group">
    
        @forelse($threads as $thread)
        <div class="ml-5 px-3 my-2 block-example border border-dark light-green lighten-4" style="border-radius: 10px;">
            <a href="{{route('thread.show',$thread->id)}}" class="list-group-itm px-3">
                <h4 class="list-group-item-heading font-weight-bold">{{$thread->subject}}</h4>
                <p class="list-group-item-text">{{str_limit($thread->thread,100)}} </p>
            </a>
        </div>
       
    @empty
    <h5>No Threads</h5>

    @endforelse 
    </div>
     
