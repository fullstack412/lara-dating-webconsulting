@extends('layouts.app')

@section('content')
<div class="container">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a href="#message" class="nav-link" data-toggle="tab">Messages</a>
    </li>
    <li class="nav-item">
      <a href="#spam" class="nav-link active" data-toggle="tab">Spam</a>
    </li>
    <li class="nav-item">
      <a href="#universal" class="nav-link" data-toggle="tab">Universal Messages</a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade" id="message">
      <p>Messages</p>
    </div>
    <div class="tab-pane fade show active" id="spam">
      <p>Spam</p>
    </div>
    <div class="tab-pane fade" id="universal">
      <p>Universal Messages</p>
    </div>
  </div>
</div>
@endsection