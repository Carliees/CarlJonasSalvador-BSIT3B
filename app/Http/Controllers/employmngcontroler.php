<?php

namespace App\Http\Controllers;

use App\Models\employeesample;
use Illuminate\Http\Request;

class employmngcontroler extends Controller
{
    protected $uniqueemployee;

    public function __construct(){
        $this->uniqueemployee = New employeesample();
    }
    public function index(){
        $response['employee_sample'] = $this->uniqueemployee->all();
        return view('employee-mngt.index')->with($response);
    }
    public function table(){
        $response['employee_sample'] = $this->uniqueemployee->all();
        return view('employee-mngt.index')->with($response);
    public function create()}{
      
    }
    public function store(Request $request){
       $this->uniqueemployee->create($request->all());
       return redirect()->back();
    }
    public function edit(string $id)
    {
        $response['uniqueemployee'] = $this->uniqueemployee->find($id);
        return view('employee-mngt.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $uniqueemployee = $this->uniqueemployee->find($id);
        $uniqueemployee ->update(array_merge($uniqueemployee->toArray(), $request->toArray()));
        return redirect('uniqueemployee');
    }
    public function destroy(string $id)
    {
        $employee_sample= $this->uniqueemployee->find($id);
        $employee_sample->delete();
        return redirect()->back();
    }
}
