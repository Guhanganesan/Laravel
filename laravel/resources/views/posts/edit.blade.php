@extends('layouts.app')
@section('mycontents')
<h1> Edit Post</h1>
{!!Form::open(['action'=>['PostController@update',$posts->id],'method'=>'POST'])!!}

<div class="form-group">
    {{Form::label('title','Title')}}

    {{Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Title'])}}

</div>


<div class="form-group">
        {{Form::label('body','Body')}}
    
        {{Form::textarea('body',$posts->body,['id'=>'article-editor','class'=>'form-control'])}}
</div>

{{Form::hidden('_method','PUT')}}

{{Form::submit('submit',['class'=>'btn btn-primary'])}}

{!! Form::close()!!}

@endsection










