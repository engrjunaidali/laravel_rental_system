<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('eid', 'desc')->get();
        return view('admin.employees.index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = new Employee;
        $e->first_name = $request->first_name;
        $e->last_name = $request->last_name;
        $e->dob = $request->dob;
        $e->gender = $request->gender;
        $e->contact_no = $request->contact_no;
        $e->address = $request->address;
        $e->save();
        return redirect('employees/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eid)
    {
        $employees = Employee::find($eid);
        return view('admin.employees.edit',['employees'=>$employees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eid)
    {
        $e=Employee::find($eid);
        $e->first_name = $request->first_name;
        $e->last_name = $request->last_name;
        $e->dob = $request->dob;
        $e->gender = $request->gender;
        $e->contact_no = $request->contact_no;
        $e->address = $request->address;
        $e->save();
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
