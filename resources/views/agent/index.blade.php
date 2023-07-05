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
            <a href="{{ route('agent.top') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> TOP 10 AGENT</a>
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
								<th class="text-center">Partner Id</th>
								<th class="text-center">Pin Lock</th>
								<th class="text-center">Store Open</th>
								<th class="text-center">Store Close</th>
								<th class="text-center">Address</th>
								<th class="text-center">Kelurahan</th>
								<th class="text-center">Kecamatan</th>
								<th class="text-center">Kota</th>
								<th class="text-center">Provinsi</th>
								<th class="text-center">Kode Pos</th>
								<th class="text-center">Latitude</th>
								<th class="text-center">Longitude</th>
								<th class="text-center">Ktp</th>
								<th class="text-center">Kk</th>
								<th class="text-center">Npwp</th>
								<th class="text-center">No Rekening</th>
								<th class="text-center">Buku Rekening</th>
								<th class="text-center">Point</th>
								<th class="text-center">Credit Limit</th>
								<th class="text-center">Subscription</th>
								<th class="text-center">Max Load</th>
								<th class="text-center">Default Agent</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($agent as $data )
              <tr>
                <td class="text-center"><?= $no; ?></td>
                
								<td class="text-center">{{ $data->id }}</td>
								<td class="text-center">{{ $data->store_name }}</td>
								<td class="text-center">{{ $data->partner_id }}</td>
								<td class="text-center">{{ $data->pin_lock }}</td>
								<td class="text-center">{{ $data->store_open }}</td>
								<td class="text-center">{{ $data->store_close }}</td>
								<td class="text-center">{{ $data->address }}</td>
								<td class="text-center">{{ $data->kelurahan }}</td>
								<td class="text-center">{{ $data->kecamatan }}</td>
								<td class="text-center">{{ $data->kota }}</td>
								<td class="text-center">{{ $data->provinsi }}</td>
								<td class="text-center">{{ $data->kode_pos }}</td>
								<td class="text-center">{{ $data->latitude }}</td>
								<td class="text-center">{{ $data->longitude }}</td>
								<td class="text-center">{{ $data->ktp }}</td>
								<td class="text-center">{{ $data->kk }}</td>
								<td class="text-center">{{ $data->npwp }}</td>
								<td class="text-center">{{ $data->no_rekening }}</td>
								<td class="text-center">{{ $data->buku_rekening }}</td>
								<td class="text-center">{{ $data->point }}</td>
								<td class="text-center">{{ $data->credit_limit }}</td>
								<td class="text-center">{{ $data->subscription }}</td>
								<td class="text-center">{{ $data->max_load }}</td>
								<td class="text-center">{{ $data->default_agent }}</td>
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
