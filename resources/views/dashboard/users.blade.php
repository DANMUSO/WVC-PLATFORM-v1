
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">
    <button class="btn btn-success">Users</button>
</div>
<div class="col-md-4 col-md-4">



</div>
<div class="col-md-4 col-md-4">

                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaladd">
  <span class="glyphicon glyphicon-add">Add</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="userdetails">
      <input type="hidden" name="_token" required="required" value="{{ csrf_token() }}">
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="formGroupExampleInput">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone NO">
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Role</label>
            <select  class="form-control" id="role" name="role">
             <option value="User">User</option>
             <option value="Admin">Admin</option>
             <option value="Super Admin">Super Admin</option>
            </select>
          </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>


</div>
</div>  
<br>
<div class="row">
<div class="col-md-12 col-md-12 col-sm-12 col-xs-12 tabledata">

    <table class="table table-striped example1"  id="" style="width:100%">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
        @foreach($users  as $user)
            <tr style="background-color:#fff;color:green; font-weight:bold">
              <td>
              </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                <td>

                  <!-- Button trigger modal -->
                  @if(empty($user -> deleted_at))
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$user -> id}}">
            <span class="glyphicon glyphicon-edit"></span>
          </button>

          <a href="#" class="btn btn-danger" onclick= "deactivateuser({{$user -> id}})"><span class="glyphicon glyphicon-trash"></span></a>
            @else
            <a href="#" class="btn btn-success" onclick= "activateuser({{$user -> id}})"><span class="glyphicon glyphicon-trash"></span></a>
            
            @endif
                    
          <!-- Modal -->
          <div class="modal fade" id="exampleModal{{$user -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form id="updateForm{{ $user->id }}" class="update-form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <input type="hidden" class="form-control" id="id" value="{{$user->id}}" name="id" placeholder="Full Name">
                    <label for="formGroupExampleInput">Full Name</label>
                    <input type="text" class="form-control" id="fullnameu" value="{{$user->name}}" name="fullnameu" placeholder="Full Name">
                    </div>
                    </div>
                    <div class="col-md-6"> 
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email</label>
                      <input type="text" class="form-control" id="emailu" value="{{$user->email}}" name="emailu" placeholder="Email">
                    </div>
                    </div>
                    <div class="col-md-6"> 
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Phone Number</label>
                      <input type="text" class="form-control" id="phoneu" value="{{$user->phone}}" name="phoneu" placeholder="Phone NO">
                    </div>
                    </div>
                    <div class="col-md-6"> 
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Role</label>
                      <select  class="form-control" id="roleu" name="roleu">
                      <option value="{{$user->role}}">User</option>
                      <option value="User">User</option>
                      <option value="Admin">Admin</option>
                      <option value="Super Admin">Super Admin</option>
                      </select>
                    </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                      </form>
              

                </div>
              </div>
            </div>
          </div>
                 &nbsp &nbsp &nbsp

              </td>
            </tr>
            @endforeach
           
        </tbody>
        <tfoot>
            <tr>
              <th>#ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Role</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
