@extends('layouts.app')

@section('title', 'CYBER_DATA | Agent')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Agent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> Agent</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="text-right">
            <a href="{{ route('agent.index') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i>AGENT</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="tbl_data" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Id</th>
                <th class="text-center">Store Name</th>
                <th class="text-center">Total Customer</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($agent as $data )
              <tr>
                <td class="text-center"><?= $no; ?></td>
                <td class="text-center">{{ $data->id }}</td>
                <td class="text-center">{{ $data->store_name }}</td>
                <td class="text-center">{{ $data->total }}</td>
              </tr>
              <?php $no++; ?>
              @endforeach
            </tbody>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
@endsection
