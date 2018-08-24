@extends('layouts.app')


<style>
.loksa {
  color:#0066ff
  ; font-family: 'Droid serif', serif; font-size: 36px; font-weight: 400; font-style: italic; line-height: 44px; margin: 0 0 12px; text-align: center;  margin-right:530px;

}
</style>

@section('content')
<h1>Messages</h1>
@if(count($messages) > 0)
  @foreach($messages as $message)
  <br>Request From
    <ul class="list-group">
      <li class="list-group-item">Name: {{$message->name}}</li>
      <li class="list-group-item">Email: {{$message->email}}</li>
      <li class="list-group-item">Message: {{$message->message}}</li>
    </ul>
  End of Request  <br>
  @endforeach
@endif

@endsection


@section('sidebar')
<!--
@parent
<p>this is appendes to the sidebar</p>
@endsection
