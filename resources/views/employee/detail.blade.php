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
            <td><a href="{{route('edit',['id'=>$employee->id])}}"><button type="button" class="btn btn-primary">変更</button></a></td>
            <td><a href="{{route('address.create')}}"><button type="button" class="btn btn-info">住所登録</button></a></td>
            <form method="POST" action="{{route('destroy',$employee->id)}}">
                @csrf
                <td><button type="submit" class="btn btn-secondary">削除</button></td>
            </form>
        </tr>
    </table>
</div>
    
    
@endsection

