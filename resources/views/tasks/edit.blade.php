@extends('add.app')

@section('content')

<form method="POST" action='{{route('tasks.update',$task->id)}}'>
    @method('put')
    <label for='content' class='label'>TASKの編集</label>
    <input type='text'  name='content' value='{{$task->content}}' class='input input-bordered'>
    　<button type='submit' class='btn btn-primary btn-outline'>編集</button>
</form>

@endsection