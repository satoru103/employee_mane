@extends('employee.layouts')
@include('employee.header')
@include('employee.footer')

@section('content')
@if (session('err_msg'))
    <div class="alert alert-success">
        {{ session('err_msg') }}
    </div>
@endif
<div class="mt-5">
<div class="container">
    <table class="table">
    <thead class="thead-dark">
    <tr>    
        <th>名前</th>
        <th>所属</th>
        <th>メールアドレス</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td><a href="{{route('show',['id'=>$employee->id])}}">{{$employee->name}}</a></td>
            <td>{{$employee->Department}}</td>
            <td>{{$employee->email}}</td>
        </tr>
        @endforeach
    </table>
    </thead>
</div>    
</div>
@endsection

