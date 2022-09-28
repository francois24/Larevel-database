<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info;
class infoController extends Controller
{
    public function index()
    {
        $infos = info::all();
        return view ('info.index')->with('info', $infos);
    }
    
    public function create()
    {
        return view('info.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        info::create($input);
        return redirect('info')->with('flash_message', 'info Addedd!');  
    }
    
    public function show($id)
    {
        $info = info::find($id);
        return view('info.show')->with('info', $info);
    }
    
    public function edit($id)
    {
        $info = info::find($id);
        return view('info.edit')->with('info', $info);
    }
  
    public function update(Request $request, $id)
    {
        $info = info::find($id);
        $input = $request->all();
        $info->update($input);
        return redirect('info')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        info::destroy($id);
        return redirect('info')->with('flash_message', 'Student deleted!');  
    }
}
