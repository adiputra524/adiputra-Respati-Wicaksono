@extends('layouts.admin')
@section('content')
    @if(count($posts)>1)
        @foreach($posts as $post)
           id : {{$post->item_id}} <br>
           Item Name : {{$post->item_name}} <br>
           Price : {{$post->price}} <br>
          Discount :  {{$post->discount}} <br>
          Description :{{$post->description}}<br>
            <br>
          
          

        @endforeach

        
    @else
       <p>posts not found</p>
    @endif


@endsection
