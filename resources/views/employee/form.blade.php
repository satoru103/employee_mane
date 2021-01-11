@extends('employee.layouts')

@section('content')
<div class="container">
<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="名前">
    </div>
    <div class="form-group">
        <label for="Department">部署</label>
        <select class="form-control" name="Department" placeholder="部署">
        @foreach(Config::get('department') as $department)
            <option>
                {{$department}}
            </option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="email">Eメールアドレス</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  <button type="submit" class="btn btn-primary">追加する</button>
</form>
<a class="btn btn-secondary" href="{{route('index')}}">戻る</a>
</div>
@endsection


