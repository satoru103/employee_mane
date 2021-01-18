@extends('employee.layouts')
@include('employee.header')
@include('employee.footer')
@section('content')
<div class="container">
    <div class="mt-5 card">
    <h3 class="card-header">Featured</h3>
        <div class="card-body" style="margin: 0 auto">
            <img src="{{asset('/images/profile_blank.png')}}" style="width: 300px;height:300px">
        </div>
        <div class="card-footer">
        <table>
        <tr>    
            <th>名前</th>
            <th>所属</th>
            <th>メールアドレス</th>
            <th>郵便番号</th>
            <th>都道府県</th>
            <th>住所1</th>
            <th>住所2</th>
        </tr>
            <tr>
                <td>{{optional($employee)->name}}</td>
                <td>{{optional($employee)->Department}}</td>
                <td>{{optional($employee)->email}}</td>
                <td>{{optional($employee)->postcode}}</td>
                <td>{{optional($employee)->pref}}</td>
                <td>{{optional($employee)->address1}}</td>
                <td>{{optional($employee)->address2}}</td>
                <td><a href="{{route('edit',['id'=>$employee->id])}}"><button type="button" class="btn btn-primary">変更</button></a></td>
                <form method="POST" action="{{route('destroy',$employee->id)}}">
                    @csrf
                    <td><button type="submit" class="btn btn-secondary">削除</button></td>
                </form>
            </tr>
        </table>
        </div>
    
  
</div>
</div>
    
    
@endsection

