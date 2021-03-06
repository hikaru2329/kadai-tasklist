@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {!! link_to_route('tasks.index', 'タスク一覧', ['user' => Auth::id()],['class' => 'btn btn-primary mx-auto d-block']) !!}
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TaskList</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection

