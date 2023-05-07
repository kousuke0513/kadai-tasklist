@extends('add.app')

@section('content')

<form method="POST" action='{{route('tasks.update',$task->id)}}'>
    @method('put')
    @csrf
    <label for='content' class='label'>TASKの編集</label>
    <input type='text'  name='content' value='{{$task->content}}' class='input input-bordered'>
    　<button type='submit' class='btn btn-primary btn-outline'>編集</button>

       <label for='status' class='label'>ステータス変更</label>
    <input type='text'  name='status' value='{{$task->status}}' class='input input-bordered'>
    　<button type='submit' class='btn btn-primary btn-outline'>変更</button>
</form>

@endsection