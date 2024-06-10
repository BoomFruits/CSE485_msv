@extends('layouts.parent')
@section('main')
    <form method="post" action="{{ route('department.update',$department->DepartmentID) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="exampleInputEmail1">DepartmentName</label>
        <input type="text" class="form-control" name="DepartmentName" value="{{ $department->DepartmentName }}">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Location</label>
        <input type="text" class="form-control" name="Location" value="{{ $department->Location }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">manager id</label>
            <input type="text" class="form-control" name="manager_id" value="{{$department->manager_id}}">
        </div>
        
        <div style="display:flexbox;">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('department.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
    
@endsection