@extends('employee.layouts')
@include('employee.header')
@include('employee.footer')

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
    <div class="form-group">
            <label for="postcode">郵便番号</label>
            <input id="postcode" type="text" class="form-control" name="postcode">
        </div>
        <div class="form-group">
            <label for="pref">都道府県</label>
            <select name="pref" class="form-control">
            @foreach(Config::get('pref') as $pref)
                <option>
                {{$pref}}
                </option>
            @endforeach    
            </select>
        </div>
        <div class="form-group">
            <label for="address1">区市町村</label>
            <input id="address1" type="text" class="form-control" name="address1">
        </div>
        <div class="form-group">
            <label for="address2">マンション名</label>
            <input id="address2" type="text" class="form-control" name="address2">
        </div>
  <button type="submit" class="btn btn-primary">追加</button>
</form>
    <a href="{{route('index')}}"><button type="submit" class="btn btn-primary">戻る</button></a>
</div>
@endsection


