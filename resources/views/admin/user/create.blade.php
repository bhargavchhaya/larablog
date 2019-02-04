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
                        <h3 class="box-title">Add New User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('user.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="emai" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label>Assign Role(s)</label>
                                    <div class="row">
                                        @foreach ($roles as $role)
                                        <div class="col-lg-4">
                                            <div class="checkbox">
                                                <label for=""><input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</label>
                                            </div>
                                        </div>
                                        @endforeach   
                                    </div>                    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
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