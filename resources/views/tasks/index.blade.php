@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <th>{{$task->status }}</th>
                    <td>{{ $task->content }}</td>
                    <td>{!! link_to_route('tasks.show','詳細', ['task' => $task->id]) !!}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {!! link_to_route('tasks.create','新規タスクの登録',[],['class'=>'btn btn-primary']) !!}
    
     


@endsection