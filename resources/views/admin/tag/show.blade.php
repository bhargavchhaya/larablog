@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
    
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tags<small> tagging</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <a href="{{ route('tag.create') }}" class="btn btn-success">Add New</a>
            <button type="button" class="btn btn-primary" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Tag Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($tags as $tag)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td><a href="{{ route('tag.edit', $tag->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td>
                        <form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy', $tag->id) }}" style="display:none;" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <a href="" onclick="if (confirm('Are you sure you want to Delete ?')) {
                          event.preventDefault(); 
                          document.getElementById('delete-form-{{ $tag->id }}').submit();
                        }else{
                          event.preventDefault();
                        }" ><span class="glyphicon glyphicon-trash"></span></a>
                      </td>
                  </tr>
                @endforeach              
              <tfoot>
                <tr>
                  <th>Sr. No.</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
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