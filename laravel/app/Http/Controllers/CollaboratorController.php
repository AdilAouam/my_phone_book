<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollaboratorController extends Controller
{
    public function create()
    {
        return view('collaborator');
    }

    public function store(Request $data)
    {
        $data->validate([
            'civility',
            'first_name'=>'required',
            'last_name'=>'required',
            'street'=>'required',
            'postal_code'=>'required | min:5 | max:5',
            'city'=>'required',
            'phone_number'=>'unique:collaborator',
            'email'=>'required | email | unique:collaborator',
            'company_id'=>'required'
        ]);
        $data = Collaborator::create(request(['civility', 'first_name', 'last_name', 'street', 'postal_code', 'city', 'phone_number', 'email', 'company_id']));
        return redirect('collaborator/list');
    }

    function showAll()
    {
        $data = Collaborator::all();
        $data = DB::table('collaborator')->join('company', 'collaborator.company_id', '=', 'company.id')->get();
        return view('collaborator_list', ['data'=>json_decode($data, true)]);
    }

    function display($id)
    {
        $data = Collaborator::find($id);
        return view('collaborator_update', ['data'=>$data]);
    }

    function showUpdate()
    {
        $data = Collaborator::all();
        $data = DB::table('collaborator')->join('company', 'collaborator.company_id', '=', 'company.id')->get();
        return view('collaborator_list_update', ['data'=>json_decode($data, true)]);
    }

    function update(Request $req)
    {
        $data = Collaborator::find($req->id);
        $data->civility=$req->civility;
        $data->first_name=$req->first_name;
        $data->last_name=$req->last_name;
        $data->street=$req->street;
        $data->postal_code=$req->postal_code;
        $data->city=$req->city;
        $data->phone_number=$req->phone_number;
        $data->email=$req->email;
        $data->company_id=$req->company_id;
        $data->save();
        return redirect('collaborator/list');
    }

    function showDelete()
    {
        $data = Collaborator::all();
        $data = DB::table('collaborator')->join('company', 'collaborator.company_id', '=', 'company.id')->get();
        return view('collaborator_delete', ['data'=>json_decode($data, true)]);
    }

    function delete($id) 
    {
        $data = Collaborator::find($id);
        $data->delete();
        return redirect('collaborator/list');
    }
}
