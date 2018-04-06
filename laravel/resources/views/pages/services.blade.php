@extends('layouts.app')
@section('mycontents')
<h1>{{$data['name']}}</h1>
<ul class="list-group">
    @foreach($data['course'] as $list)
    <li type="1" class="list-group-item">{{$list}} </li>
    @endforeach
</ul>

@endsection
