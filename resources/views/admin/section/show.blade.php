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
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
              <a href="{{ route('section.create') }}" class="btn btn-success">Add New</a>
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>              
          </div>
        </div>
        <div class="box-body">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Title</th>
                      <th>Sub Title</th>
                      <th>Slug</th>
                      <th>Created At</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($sections as $section)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $section->title }}</td>
                        <td>{{ $section->title }}</td>
                        <td>{{ $section->slug }}</td>
                        <td>{{ $section->created_at }}</td>
                        <td><a href="{{ route('section.edit', $section->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td>
                          <form id="delete-form-{{ $section->id }}" action="{{ route('section.destroy', $section->id) }}" style="display:none;" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                          </form>
                          <a href="" onclick="if (confirm('Are you sure you want to Delete ?')) {
                            event.preventDefault(); 
                            document.getElementById('delete-form-{{ $section->id }}').submit();
                          }else{
                            event.preventDefault();
                          }" ><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                      </tr>
                    @endforeach  
                    </tbody>
                  <tfoot>
                    <th>Sr. No.</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
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