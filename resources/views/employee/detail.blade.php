@extends('employee.layouts')
@include('employee.header')
@include('employee.footer')
@section('content')
<div class="container">
<table>
    <tr>    
        <th>名前</th>
        <th>所属</th>
        <th>メールアドレス</th>
    </tr>
        <tr>
            <td>{{optional($employee)->name}}</td>
            <td>{{optional($employee)->Department}}</td>
            <td>{{optional($employee)->email}}</td>
            <td><button type="button" class="btn btn-primary"><a href="{{route('edit',['id'=>$employee->id])}}">更新</a></button></td>
            <form method="POST" action="{{route('destroy',$employee->id)}}">
                @csrf
                <td><button type="submit" class="btn btn-secondary">削除</button></td>
            </form>
        </tr>
    </table>
</div>
    
    
@endsection

