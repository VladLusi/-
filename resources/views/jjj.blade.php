@extends('layouts.app')
@section('content')
@foreach($prod as $e)
{{$e->Tovar}}
{{$e->Price}}

@endforeach
@endsection
<a href="#">Где нас найти?</a>
<a href="#">О нас</a>
<a href="#">Товары</a>
    <img class="content-image" src="{{$e->img}}" draggable="false"/>   </div>
  <div class="after">
    <img class="content-image"src="{{$e->Terraria}}" draggable="false"/>
    <img class="content-image"src="{{$e->Terraria}}" draggable="false"/>
    <img class="content-image"src="{{$e->Terraria}}" draggable="false"/>
    


 