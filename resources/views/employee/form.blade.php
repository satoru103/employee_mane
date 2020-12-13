@extends('employee.layouts')

@section('content')
<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">name</label>
        <input type="name" class="form-control" id="exampleInputName" placeholder="名前">
    </div>
    <div class="form-group">
        <label for="exampleInputDepartment">Department</label>
        <input type="name" class="form-control" id="exampleInputName" placeholder="部署">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  <button type="submit" class="btn btn-primary">追加する</button>
</form>
<a class="btn btn-secondary" href="{{route('index')}}">戻る</a>
@endsection

