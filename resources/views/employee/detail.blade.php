@extends('employee.layouts')

@section('content')
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
            <td><button type="button" class="btn btn-primary"><a href="/employee/{{optional($employee)->id}}">更新</a></button></td>
            <td><button type="button" class="btn btn-secondary">削除</button></td>
        </tr>
    </table>
    
@endsection

