@extends('employee.layouts')

@section('content')
@if (session('err_msg'))
    <div class="alert alert-success">
        {{ session('err_msg') }}
    </div>
@endif

    <table>
    <tr>    
        <th>名前</th>
        <th>所属</th>
        <th>メールアドレス</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->name}}</td>
            <td>{{$employee->Department}}</td>
            <td>{{$employee->email}}</td>
            <td><button type="button" class="btn btn-primary"><a href="/employee/{{$employee->id}}">更新</a></button></td>
            <td><button type="button" class="btn btn-secondary">削除</button></td>
        </tr>
        @endforeach
    </table>
    
@endsection

