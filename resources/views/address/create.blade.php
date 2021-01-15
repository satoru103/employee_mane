@extends('layouts.app')

@section('content')
<form action="{{route('address.update')}}" method="post">
@csrf
<div class="container">
        <div class="form-group">
            <label for="postcode">郵便番号</label>
            <input id="postcode" type="text" name="postcode" value="{{ old('postcode') }}">
        </div>
        <div class="form-group">
            <label for="pref">都道府県</label>
            <select name="pref">
            @foreach(Config::get('pref') as $pref)
                <option>
                {{$pref}}
                </option>
            @endforeach    
            </select>
        </div>
        <div class="form-group">
            <label for="address1">区市町村</label>
            <input id="address1" type="text" name="address1" value="{{ old('address1') }}">
        </div>
        <div class="form-group">
            <label for="address2">マンション名</label>
            <input id="address2" type="text" name="address2" value="{{ old('address2') }}">
        </div>
    <button type="submit" class="btn btn-primary">住所を登録する</button>
    <a href="{{route('detail'),['id'=>$employee->id]}}"><button type="submit" class="btn btn-primary">戻る</button></a>
    </div>
</form>

@endsection