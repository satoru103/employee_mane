<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index(){
        $employees =Employee::all();
        return view('employee.index',['employees'=>$employees]);
    }

     /**
     * 指定ユーザーの社員情報を登録する
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */

    public function create(){
        return view('employee.form');
    }

    public function store(EmployeeRequest $request){
        $inputs=$request->all();
        Employee::create($inputs);
        $request->session()->flash('err_msg', 'データを登録しました');
        
        return redirect()->route('index');
    }
    /**
     * 指定ユーザーの社員情報を表示する
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function detail(Request $request,$id){
        $employee =Employee::find($id);
        if(is_null($id)){
            $request->session()->flash('err_msg', 'データがありません');
            return redirect(route('index'));
        }
        return view('employee.detail',['employee'=>$employee]);
    }

     /**
     * 指定ユーザーの編集画面を表示させる
     *
     * @param  int  $id
     * @param  Request  $request
     * @return \Illuminate\View\View
     */

    public function edit(Request $request,$id){
        $employee =Employee::find($id);
        if(is_null($id)){
            $request->session()->flash('err_msg', 'データがありません');
            return redirect(route('index'));
        }
        return view('employee.edit',['employee'=>$employee]);
    }

    public function update(EmployeeRequest $request){
        $inputs=$request->all();
        Employee::find($inputs['id']);
        $request->session()->flash('err_msg', 'データを登録しました');
        return redirect(route('index'));
    }

    /**
     * 指定ユーザーの社員情報を削除する
     *
     * @param  int  $id
     * @param  Request  $request
     * @return \Illuminate\View\View
     */

    public function destroy(Request $request,$id){
        Employee::destroy($id);
        return redirect(route('index'));
    }
}
