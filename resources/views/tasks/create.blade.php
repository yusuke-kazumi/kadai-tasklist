@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
    {{ '<p style="color: red;">When passed through htmlentities function</p>' }}
    {!! '<p style="color: red;">When not passed through htmlentities function</p>' !!}


        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
