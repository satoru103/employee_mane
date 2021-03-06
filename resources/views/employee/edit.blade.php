@extends('employee.layouts')
@include('employee.header')
@include('employee.footer')

@section('content')
<div class="container">
<form method="POST" action="{{route('update')}}">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$employee->id}}">
    <input type="hidden" name="user_id" id="user_id" value="{{$employee->user_id}}">
    <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" value="{{$employee->name}}">
    </div>
    <div class="form-group">
        <label for="Department">部署</label>
        <select class="form-control" name="Department" placeholder="部署" value="{{old('Department',$employee->Department)}}">
        @foreach(Config::get('department') as $department)
            <option>
                {{$department}}
            </option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="text" class="form-control" name="email" id="email" value="{{$employee->email}}">
    </div>
  <button type="submit" class="btn btn-primary">更新</button>
  <a class="btn btn-secondary" href="{{route('index')}}">戻る</a>
</form>
</div>

@endsection


