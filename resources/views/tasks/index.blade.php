@extends('add.app')

@section('content')

@if(isset($tasks))
<table class='table table-zebra w-full'>
    <thead>
        <td class='normal-case'>No</td>
        <td class='normal-case'>ToDo</td>
    </thead>

    <tbody>
@foreach ($tasks as $task)
        <tr>
            <th><a class='link link-accent' href='{{route('tasks.show',$task->id)}}'>{{$task->id}}</a></th>
            <th>{{$task->content}}<input type='checkbox'></th>
        </tr>
@endforeach
    </tbody>
</table>
@endif
<a class='btn btn-primary' href="{{route('tasks.create')}}">新規タスク作成</a>
@endsection





