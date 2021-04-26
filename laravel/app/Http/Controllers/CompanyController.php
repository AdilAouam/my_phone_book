<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    public function create()
    {
        return view('company');
    }

    public function store(Request $data)
    {

        
        $data->validate([
            'name'=>'required | unique:company',
            'street'=>'required',
            'postal_code'=>'required | min:5 | max:5',
            'city'=>'required',
            'company_number'=>'unique:company',
            'email'=>'required | email | unique:company',
        ]);
        $data = Company::create(request(['name', 'street', 'postal_code', 'city', 'company_number', 'email']));
        return redirect('company/list');
    }

    function showOne($id)
    {
        $data = Company::find($id);
        return view('company_id', ['data'=>$data]);
    }

    function showAll()
    {
        $data = Company::all();
        return view('company_list', ['data'=>$data]);
    }

    function display($id)
    {
        $data = Company::find($id);
        return view('company_update', ['data'=>$data]);
    }

    function update(Request $req)
    {
        $data = Company::find($req->id);
        $data->name=$req->name;
        $data->street=$req->street;
        $data->postal_code=$req->postal_code;
        $data->city=$req->city;
        $data->company_number=$req->company_number;
        $data->email=$req->email;
        $data->save();
        return redirect('company/list');
    }

    function showDelete()
    {
        $data = Company::all();
        return view('company_delete', ['data'=>$data]);
    }

    function delete($id) 
    {
        $data = Company::find($id);
        $data->delete();
        return redirect('company/list');
    }
}
