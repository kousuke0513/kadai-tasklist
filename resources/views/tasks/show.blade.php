@extends('add.app')

@section('content')
<div class='w-full'>
    <h2>タスク詳細ページ</h2>
</div>

<table class='table table-zebra w-full'>
    <thead>
        <td class='normal-case'>No</td>
        <td class='normal-case'>ToDo</td>
    </thead>


    <tr>
        <th>{{$task->id}}</th>
        <th>{{$task->content}}</th>
    </tr>
</table>
<a class='btn btn-outline' href='{{route('tasks.edit',$task->id)}}'>TASK編集</a>


    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-error btn-outline" 
            onclick="return confirm('No = {{ $task->id }} のメッセージを削除します。よろしいですか？')">削除</button>
    </form>
@endsection