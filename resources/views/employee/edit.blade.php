@extends('employee.layouts')

@section('content')
<form method="POST" action="{{route('update')}}">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$employee->id}}">
    <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$employee->name}}">
    </div>
    <div class="form-group">
        <label for="Department">部署</label>
        <input type="text" class="form-control" name="Department" id="Department" placeholder="部署" value="{{$employee->Department}}">
    </div>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="text" class="form-control" name="email" id="email" value="{{$employee->email}}">
    </div>
  <button type="submit" class="btn btn-primary">変更する</button>
</form>
<a class="btn btn-secondary" href="{{route('index')}}">戻る</a>
@endsection

