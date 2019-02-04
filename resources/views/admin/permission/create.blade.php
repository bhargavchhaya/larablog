@extends('admin.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        @include('includes.messages')
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permissions</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form permission="form" action="{{ route('permission.store') }}" method="POST">
                {{ csrf_field() }}
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Permission Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Permission">
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
                </div>  
            </div>                        
            </div>        
        <!-- /.box-body -->            
           </form>
           </div>
        <!-- /.box -->          
    </div>
        <!-- /.col-->
</div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection