@extends('employee.layouts')

@section('content')
<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="form-group">
        <label for="name">name</label>
        <input type="name" class="form-control" name="name "id="name" placeholder="名前">
    </div>
    <div class="form-group">
        <label for="Department">Department</label>
        <input type="name" class="form-control" name="Department "id="Department" placeholder="部署">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email "id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  <button type="submit" class="btn btn-primary">追加する</button>
</form>
<a class="btn btn-secondary" href="{{route('index')}}">戻る</a>
@endsection


