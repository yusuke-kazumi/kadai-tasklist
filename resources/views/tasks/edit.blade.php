@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のtask編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

    	{!! Form::label('status','id:')!!}
	{!! Form::text('status')!!}

        {!! Form::label('content', 'tasklist:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection
