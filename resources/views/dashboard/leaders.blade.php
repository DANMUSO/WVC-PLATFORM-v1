
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Leaders</button>

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
        <h5 class="modal-title" id="exampleModalLabel">Add Leader</h5>
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


</div>
</div>  
<br>
<div class="row">
<div class="col-md-12 col-md-12 col-sm-12 col-xs-12 tabledata">

    <table class="table table-striped example" style="width:100%">
        <thead>
            <tr>
                <th>Member ID</th>
                <th>Photo</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Joined Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            <tr style="background-color:#fff;color:green; font-weight:bold">
              <td>VWC2001</td>
              <td><img src="{{ asset('v2/img/user.png')}}" style="width:60%; height:45px"></td>
             
                <td>Daniel Kimani M</td>
                <td>kimdan2030@gmail.com</td>
                <td>+254703894372</td>
                <td>Male</td>
                <td>2024-04-25</td>
                <td>

                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <span class="glyphicon glyphicon-edit"></span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
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
                 &nbsp &nbsp &nbsp
                <button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr style="background-color:#fff;color:green; font-weight:bold">
              <td>VWC2001</td>
              <td><img src="{{ asset('v2/img/user.png')}}" style="width:60%; height:45px"></td> 
                <td>Apostle  Mukadi</td>
                <td>mukadi@gmail.com</td>
                <td>+25470000376</td>
                <td>Male</td>
                <td>2024-04-25</td>
                <td>
                  
                  

                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <span class="glyphicon glyphicon-edit"></span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
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
                
                  &nbsp &nbsp &nbsp
                <button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr style="background-color:#fff;color:green; font-weight:bold">
              <td>VWC2001</td>
              <td><img src="{{ asset('v2/img/user.png')}}" style="width:60%; height:45px"></td> 
                <td>John Mwaura</td>
                <td>mwaura@gmail.com</td>
                <td>+25470389111</td>
                <td>Male</td>
                <td>2024-04-25</td>
                <td>

                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <span class="glyphicon glyphicon-edit"></span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
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
                 &nbsp &nbsp &nbsp
                <button class="btn btn-danger">  <span class="glyphicon glyphicon-trash"></span> </button></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
              <th>Member ID</th>
              <th>Photo</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
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
