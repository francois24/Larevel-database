<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
class profileController extends Controller
{
    public function index()
    {
        $infos = profile::all();
        return view ('profile.index')->with('profile', $infos);
    }
    
    public function create()
    {
        return view('profile.create');
    }
  
    public function store(Request $request)
    {
        // $input = $request->all();
        // info::create($input);
        // return redirect('info')->with('flash_message', 'info Addedd!');  


        // $requestData = $request->all();
        // info::create($requestData);
        // $fileName = time().$request->file('photo')->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        // $requestData["photo"] = '/storage/'.$path;

        
        // return redirect('info')->with('flash_message', 'info Added!');  

        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        profile::create($requestData);
        return redirect('profile')->with('flash_message', 'Employee Addedd!');  
    }
    
    public function show($id)
    {
        $info = profile::find($id);
        return view('profile.show')->with('profile', $info);
    }
    
    public function edit($id)
    {
        $info = profile::find($id);
        return view('profile.edit')->with('profile', $info);
    }
  
    public function update(Request $request, $id)
    {
        $info = profile::find($id);
        $input = $request->all();
        $info->update($input);
        return redirect('profile')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        profile::destroy($id);
        return redirect('profile')->with('flash_message', 'Student deleted!');  
    }
}
