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
                <h3 class="box-title">Edit Role</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('role.update', $role->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
            <div class="box-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="role" value="{{ $role->name }}">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Posts Permission</label>
                        @foreach ($permissions as $permission)
                            @if ($permission->forcol == 'post')
                            <div class="checkbox">
                                <label for=""><input type="checkbox" name="permission[]" id="" 
                                value="{{$permission->id}}"
                                @foreach ($role->permissions as $role_permit)
                                    @if ($role_permit->id == $permission->id)
                                        checked
                                    @endif
                                @endforeach
                                >{{ $permission->name }}</label>
                            </div>                                   
                            @endif
                        @endforeach                                        
                    </div>
                    <div class="col-md-4">
                        <label for="name">User Permission</label>
                        @foreach ($permissions as $permission)
                            @if ($permission->forcol == 'user')
                            <div class="checkbox">
                                <label for=""><input type="checkbox" name="permission[]" id="" 
                                value="{{$permission->id}}"
                                @foreach ($role->permissions as $role_permit)
                                @if ($role_permit->id == $permission->id)
                                    checked
                                @endif
                                @endforeach
                                >{{ $permission->name }}</label>
                            </div>                                   
                            @endif
                        @endforeach  
                    </div>
                    <div class="col-md-4">
                        <label for="name">Other Permission</label>
                        @foreach ($permissions as $permission)
                            @if ($permission->forcol == 'other')
                            <div class="checkbox">
                                <label for=""><input type="checkbox" name="permission[]" id="" 
                                value="{{$permission->id}}"
                                @foreach ($role->permissions as $role_permit)
                                    @if ($role_permit->id == $permission->id)
                                        checked
                                    @endif
                                @endforeach
                                >{{ $permission->name }}</label>
                            </div>                                   
                            @endif
                        @endforeach  
                    </div>
                </div>
                <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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