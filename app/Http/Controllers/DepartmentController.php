<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $department = new Department();
        // $department->id = $request->id;
        $department->DepartmentName = $request->DepartmentName;
        $department->Location = $request->Location;
        $department->manager_id = $request->manager_id;
        $department->save();
        Session::flash('msg','Department created succesfully!');
        return redirect()->route('department.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::where('DepartmentID',$id)->first();
        return view('department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Department::where('DepartmentID',$id)->first();
        $department->DepartmentName = $request->input('DepartmentName');
        $department->Location = $request->input('Location');
        $department->manager_id = $request->input('manager_id');
        $department->update();
        Session::flash('msg','Department Edited Successfully!');
        return redirect()->route('department.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::where('DepartmentID',$id)->first();
        $department->delete();
        Session::flash('msg','Department Deleted Successfully!');
        return redirect()->route('department.index');       
    }
}
