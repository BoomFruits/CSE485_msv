@extends('layouts/parent')
@section('title',"Trường đại học Thuỷ Lợi")
@section('main')
    <h3 class="text-center text-success text-uppercase mt-3">Management Department</h3>
    @if(Session::has('msg'))
    <p class="alert alert-success" id="msg">{{ Session::get('msg') }}</p>
  @endif
    <a href="{{ route('department.add')}}" class="btn btn-success"><i class="bi bi-plus-circle"></i> Add new</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">DepartmentID</th>
                <th scope="col">DepartmentName</th>
                <th scope="col">Location</th>
                <th scope="col">Manager ID</th>
                <th colspan="3" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $item)
                <tr>
                    <th scope="row">{{ $item->DepartmentID }}</th>
                    <td>{{ $item->DepartmentName }}</td>
                    <td>{{ $item->Location }}</td>
                    <td>{{ $item->manager_id }}</td>
                    <td><a href="{{ route('department.show',$item->DepartmentID) }}" class="btn btn-success"><i class="bi bi-eye"></i></a></td>
                    <td><a href="{{ route('department.edit',$item->DepartmentID) }}" class="btn btn-success"><i class="bi bi-pencil"></i></a></td>
                    <td>
                        <form action="{{ route('department.delete', $item->DepartmentID) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="ml-3 btn btn-danger " type="submit" onclick="confirmAction(event)">
                                <i class="bi bi-trash"></i>
                            </a>
                            <script>
                                function confirmAction(event) {
                                    event.preventDefault();
                                    if (confirm('Bạn có chắc chắn muốn xóa article này?')) {
                                        event.target.closest('form').submit();
                                    } else {
                                    }
                                }
                            </script>
                        </form>
                    </td>
                    {{-- <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="bi bi-trash"></i>
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
         setTimeout(function(){
          document.getElementById("msg").hidden = true;    
        },3000)
        document.getElementById("msg").hidden = false;    
    </script>
@endsection
