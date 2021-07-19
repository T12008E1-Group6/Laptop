@extends('admin_layout')
@section('admin_content')

<div>
    <div class="row">
        <div class="col-md-12 d-flex">
            <h1 style="justify-content:center; align-items:center; text-align:center">
                User List
            </h1>
        </div>
    </div>
</div>
<br><br>
@if(session('message'))
    <div class="alert alert-success py-4">
        {{session('message')}}
    </div>
@endif
@if(session('ErrorMessage'))
    <div class="alert alert-danger py-4">
        {{session('ErrorMessage')}}
    </div>
@endif
<div class="md-3 mt-3 py-4 col-md-12">
    <table class="table table-striped table-bordered py-4" style="width:60%; margin-top:2%" id="myTable">
        <thead style="font-weight:bold;">
            <tr style=" color: rgb(34, 33, 33)">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Active</th>
                <th>Delete</th>
                <th>More</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        @if($user->role == 0)
                        User
                        @elseif($user->role == 1)
                        Admin
                        @else
                        Super Admin
                        @endif
                    </td>
                    <td>
                        @if($user->active == 1)
                        Active
                        @else
                        Deactivated
                        @endif
                    </td>
                    <td><a href="/adminDeleteUser/{{$user->id}}" onclick="return confirm('Do you want to Delete ?')"><button class="btn btn-danger">Delete</button></a></td>
                    <td><a href="/adminUserChangeActive/{{$user->id}}"><button class="btn 
                        @if($user->active == 0)
                        btn-success">
                        Activate
                        @else
                        btn-warning">
                        Deactivate
                        @endif
                    </button></a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot  style="font-weight:bold">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Active</th>
                <th>Delete</th>
                <th>More</th>
            </tr>
        </tfoot>
    </table>
</div>


<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        searching: true,
        ordering:[[3, 'desc']],
        lengthMenu: [[5,10,25,50,-1],[5,10,25,50,"All"]]
    });
} );
</script>

  
@endsection
