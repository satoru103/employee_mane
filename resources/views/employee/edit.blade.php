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
    <div class="form-group">
            <label for="postcode">郵便番号</label>
            <input id="postcode" type="text" class="form-control" name="postcode" value="{{$employee->postcode}}">
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
            <input id="address1" type="text" class="form-control" name="address1" value="{{$employee->address1}}">
        </div>
        <div class="form-group">
            <label for="address2">マンション名</label>
            <input id="address2" type="text" class="form-control" name="address2" value="{{$employee->address2}}">
        </div>
        <div class="form-group">
            <label for="profile_img">プロフィール画像</label>
            <input id="profile_img" type="file" class="form-control" name="profile_img" value="{{$employee->profile_img}}" accept="/image/pmg,/image/jpeg">
        </div>
  <button type="submit" class="btn btn-primary">更新</button>
  <a class="btn btn-secondary" href="{{route('index')}}">戻る</a>
</form>
</div>

@endsection


