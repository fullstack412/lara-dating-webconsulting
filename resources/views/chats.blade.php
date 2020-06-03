@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="chat-user">
      <ul class="list-group">
        @foreach($threads as $inbox)
        <li class="list-item {{$inbox->user->id == auth()->user()->id ? 'active' : ''}}">
            @if (!is_null($inbox->message))
              @if ($inbox->message->conversation->is_accepted)
                <a href="{{ route('chats', [ 'id' => $inbox->message->conversation->id ])}}">{{$inbox->user->name}}</a>
              @else
                @if (auth()->user()->id == $inbox->message->sender->id)
                  <a href="#">{{$inbox->user->name}} Waiting</a>
                @else
                  <a href="{{ route('chats.accept', [ 'id' => $inbox->message->conversation->id ])}}">{{$inbox->user->name}}Accept</a>  
                @endif
              @endif
            @endif
          </li>
        @endforeach
      </ul>
    </div>
    <div class="chat-pannel">
      @if (!is_null($conversation))
      <chat-room :conversation="{{ $conversation }}" :current-user="{{ auth()->user() }}"></chat-room>    
      @endif
    </div>
  </div>
</div>
@endsection