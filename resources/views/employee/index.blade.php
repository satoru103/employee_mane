@extends('employee.layouts')

@section('content')
@if (session('err_msg'))
    <div class="alert alert-success">
        {{ session('err_msg') }}
    </div>
@endif
<div class="container">
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
            <td><button type="button" class="btn btn-primary"><a href="/employee/edit/{{$employee->id}}">更新</a></button></td>
            <form method="POST" action="{{route('destroy',$employee->id)}}">
                @csrf
                <td><button type="submit" class="btn btn-secondary">削除</button></td>
            </form>
        </tr>
        @endforeach
    </table>
</div>    
@endsection

