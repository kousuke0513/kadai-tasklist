@extends('add.app')

@section('content')

<form mehtod='POST' action"{{'tasks.store'}}" >
    <div class='w-full'>
    <label for='content' class='label text-center'>
        追加するタスク
    </label>
    <input type='text' name='content'  id='content' class='input input-bordered w-full'>
    </div>
<button type='submit' class='btn btn-success btn-outline'>
    新規作成
</button>
    
</form>



@endsection