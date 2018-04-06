@extends('layouts.app')

@section('mycontents')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$posts->title}}</h1>

<small>Written on {{$posts->created_at}}</small>

<div>
    {!!$posts->body!!}
</div>

<a href="/posts/{{$posts->id}}/edit/" class="btn btn-default"> Edit</a>

{!!Form::open(['action'=>['PostController@destroy',$posts->id],
'method'=>'POST','class'=>'pull-right'])!!}

{{Form::hidden('_method','DELETE')}}

{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}

@endsection

