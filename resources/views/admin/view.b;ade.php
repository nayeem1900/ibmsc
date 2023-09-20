@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <H3>User List
                    <a class = "btn btn-success float-right btn-sm" href=""><i class = "fa fa-plus-circle">Add</i></a>
                </H3>
                
              </div><!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
             <th>Sl</th>
             <th>Name</th>
             <th>Email</th>
             <th>Address</th>
             <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <tr>
              <td>1</td> 
              <td></td> 
              <td></td> 
              <td></td> 
              <td>
                <a title="Edit" class ="btn btn-sm btn-primary" href =""><i class="fa fa-edit"></i></a>
                <a title="Delete" class ="btn btn-sm btn-danger" href =""><i class="fa fa-trash"></i></a>
             
              </td>      

                </tr>

                </tbody>



            </table>
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
           
            <!--/.direct-chat -->

            <!-- TO DO List -->
           
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection