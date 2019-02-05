@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('admin.layouts.pageHead')
  
  <!-- Main content -->
  <section class="content">
    
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Permission</h3>
        
        <div class="box-tools pull-right">
          <a href="{{ route('permission.create') }}" class="btn btn-success">Add New</a>
          <button type="button" class="btn btn-primary" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box-header">
            @include('includes.messages')
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Permission</th>
                <th>For</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($permissions as $permission)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->forcol }}</td>
                <td><a href="{{ route('permission.edit', $permission->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td>
                  <form id="delete-form-{{ $permission->id }}" action="{{ route('permission.destroy', $permission->id) }}" style="display:none;" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <a href="" onclick="if (confirm('Are you sure you want to Delete ?')) {
                    event.preventDefault(); 
                    document.getElementById('delete-form-{{ $permission->id }}').submit();
                  }else{
                    event.preventDefault();
                  }" ><span class="glyphicon glyphicon-trash"></span></a>
                </td>
              </tr>
              @endforeach              
              <tfoot>
                <tr>
                  <th>Sr. No.</th>
                  <th>Permission</th>
                  <th>For</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
          <!-- /.box-body -->
          <div class="box-footer">
            Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->    
    @endsection
    
    @section('footerSection')
    <script rel="stylesheet" src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script rel="stylesheet" src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    
    @endsection