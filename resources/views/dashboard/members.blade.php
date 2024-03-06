
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Members</button>

</div>
<div class="col-md-4 col-md-4">



</div>
<div class="col-md-4 col-md-4">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaladd">
  <span class="glyphicon glyphicon-add">Add</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="memberdetails">
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
            <label for="formGroupExampleInput2">Gender</label>
            <select  class="form-control" id="gender" name="gender">
             <option value="Female">Female</option>
             <option value="Male">Male</option>
             <option value="Other">Other</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Marital Status</label>
            <select  class="form-control" id="maritalstatus" name="maritalstatus">
             <option value="married">Married</option>
             <option value="notmarried">Not Married</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">State</label>
            <select  class="form-control" id="state" name="state">
             <option value="Saved">Saved</option>
             <option value="Unserved">Unserved</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Status</label>
            <select  class="form-control" id="status" name="status">
             <option value="Active">Active</option>
             <option value="Inactive">Inactive</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Join Date</label>
            <input type="date" class="form-control" id="joindate" name="joindate" placeholder="Join Date">
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
  
<table class="table table-striped example2"  id="" style="width:100%">
        <thead>
            <tr>
            <th>Member ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Marital Status</th>
                <th>State</th>
                <th>Status</th>
                <th>Joined Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
        @foreach($members  as $members)
            <tr style="background-color:#fff;color:green; font-weight:bold">
              <td>{{ $loop -> iteration}}</td>
                <td>{{ $members -> name}}</td>
                <td>{{ $members -> email}}</td>
                <td>{{ $members -> phone}}</td>
                <td>{{ $members -> gender}}</td>
                <td>{{ $members -> maritalstatus}}</td>
                <td>{{ $members -> state}}</td>
                <td>{{ $members -> status}}</td>
                <td>{{ $members -> join_date}}</td>
                <td>
                @if(empty($members -> deleted_at))
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$members -> id}}">
                  <span class="glyphicon glyphicon-edit"></span>
                </button>

                <a href="#" class="btn btn-danger" onclick= "deactivatemember({{$members -> id}})"><span class="glyphicon glyphicon-trash"></span></a>
                  @else
                  <a href="#" class="btn btn-success" onclick= "activatemember({{$members -> id}})"><span class="glyphicon glyphicon-trash"></span></a>
                  
                  @endif
          
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$members -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="updateMember{{ $members->id }}" class="update-member">
          @csrf
          <input type="hidden" class="form-control" id="id" value="{{$members->id}}" name="id" placeholder="Full Name">
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="formGroupExampleInput">Full Name</label>
          <input type="text" class="form-control" id="fullnamem" name="fullnamem" value="{{ $members -> name}}">
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="emailm" name="emailm" value="{{ $members -> email}}">
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" class="form-control" id="phonem" name="phonem" value="{{ $members -> phone}}">
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Gender</label>
            <select  class="form-control" id="genderm" name="genderm">
            <option value="{{ $members -> gender}}">{{ $members -> gender}}</option>
             <option value="Female">Female</option>
             <option value="Male">Male</option>
             <option value="Other">Other</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Marital Status</label>
            <select  class="form-control" id="maritalstatusm" name="maritalstatusm">
            <option value="{{ $members -> maritalstatus}}">{{ $members -> maritalstatus}}</option>
             <option value="married">Married</option>
             <option value="notmarried">Not Married</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">State</label>
            <select  class="form-control" id="statem" name="statem">
            <option value="{{ $members -> state}}">{{ $members -> state}}</option>
             <option value="Saved">Saved</option>
             <option value="Unserved">Unserved</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Status</label>
            <select  class="form-control" id="statusm" name="statusm">
            <option value="{{ $members -> status}}">{{ $members -> status}}</option>
             <option value="Active">Active</option>
             <option value="Inactive">Inactive</option>
            </select>
          </div>
          </div>
          <div class="col-md-6"> 
          <div class="form-group">
            <label for="formGroupExampleInput2">Join Date</label>
            <input type="date" class="form-control" id="joindatem"  name="joindatem" value="{{ $members -> join_date}}">
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
                 &nbsp &nbsp &nbsp

              </td>
            </tr>
           @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>Member ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Marital Status</th>
                <th>State</th>
                <th>Status</th>
                <th>Joined Date</th>
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
