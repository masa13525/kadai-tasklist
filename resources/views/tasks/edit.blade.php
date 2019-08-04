@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く-->

    <h1>id: {{ $task->id }}のタスク編集ページ</h1>
    
    <id class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
            
                <idv class="form-group">
                    {!! Form::label('content', 'タスク：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </idv>
                
                {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
            {!! Form::close() !!}
        </div>
    </id>

@endsection