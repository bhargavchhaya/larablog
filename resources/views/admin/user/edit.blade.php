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
                        <h3 class="box-title">Edit User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('user.update', $user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" value="@if(old('name')){{ old('name') }}
                                        @else{{ $user->name }}@endif">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="@if(old('email')){{ old('email') }}
                                    @else{{ $user->email }}@endif">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="@if(old('phone')){{ old('phone') }}
                                    @else{{ $user->phone }}@endif">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="checkbox">
                                        <label for="status"><input type="checkbox" name="status" @if (old('status') == 1 || $user->status == 1)
                                            checked
                                        @endif value="1"> Status</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Assign Role(s)</label>
                                    <div class="row">
                                        @foreach ($roles as $role)
                                        <div class="col-lg-4">
                                            <div class="checkbox">
                                                <label for=""><input type="checkbox" name="role[]" value="{{ $role->id }}"
                                                    @foreach ($user->roles as $user_role)
                                                        @if ($user_role->id == $role->id)
                                                            checked                              
                                                        @endif
                                                    @endforeach    
                                                > {{ $role->name }}</label>
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