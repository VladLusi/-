@extends('layouts.app')

@section('content')
@foreach($prod as $e)
<div class="container">
{{$e->Tovar}}
{{$e->Price}}
<img src="{{$e->img}}"/>
</div> 
@endforeach
@endsection
