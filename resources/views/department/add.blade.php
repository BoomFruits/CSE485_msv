@extends('layouts.parent')
@section('main')
    <form method="post" action="{{ route('department.save') }}">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">DepartmentName</label>
        <input type="text" class="form-control" name="DepartmentName">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Location</label>
        <input type="text" class="form-control" name="Location">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">manager id</label>
            <input type="text" class="form-control" name="manager_id">
        </div>
        
        <div style="display:flexbox;">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('department.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
    
@endsection