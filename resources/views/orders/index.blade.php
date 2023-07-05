@extends('layouts.app')

@section('title', 'CYBER_DATA | Orders')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> Orders</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @if (session('msg'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        {{ session('msg') }}
      </div>
    @endif
    @if(session('error'))
      <div class="alert alert-error alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Error!</h5>
        {{ session ('error') }}
      </div>
    @endif

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Orders</h3>

          <div class="card-tools">
            <div class="row">
            <div class="col-md-6">
                            <form method="GET" action="{{ url('orders') }}">
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Cari') }}</label>
                                    <div class="col-md-5">
                                        <input id="q" type="text" class="form-control @error('q') is-invalid @enderror" name="q" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row mb-0">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Cari') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                <div class="col-md-6">
                    <form method="GET" action="{{ url('orders') }}">
                        <div class="form-group row">
                            <div class="col-md-5">
                                <input id="after" type="date" class="form-control" name="after" value="{{ old('after') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-5">
                                <input id="before" type="date" class="form-control" name="before" value="{{ old('before') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group row mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Filter') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="tbl_data" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                
								<th class="text-center">Id</th>
								<th class="text-center">Invoice Id</th>
								<th class="text-center">Customer Id</th>
								<th class="text-center">Name</th>
								<th class="text-center">Phone</th>
								<th class="text-center">Address</th>
								<th class="text-center">Kelurahan</th>
								<th class="text-center">Kecamatan</th>
								<th class="text-center">Kota</th>
								<th class="text-center">Provinsi</th>
								<th class="text-center">Kode Pos</th>
								<th class="text-center">Latitude</th>
								<th class="text-center">Longitude</th>
								<th class="text-center">Agent Id</th>
								<th class="text-center">Agent Name</th>
								<th class="text-center">Payment Method</th>
								<th class="text-center">Payment Link</th>
								<th class="text-center">Payment Date</th>
								<th class="text-center">Buy By</th>
								<th class="text-center">Payment Total</th>
								<th class="text-center">Coupon Id</th>
								<th class="text-center">Payment Discount Code</th>
								<th class="text-center">Payment Discount</th>
								<th class="text-center">Payment Final</th>
								<th class="text-center">Order Weight</th>
								<th class="text-center">Order Distance</th>
								<th class="text-center">Delivery Status</th>
								<th class="text-center">Delivery Fee</th>
								<th class="text-center">Delivery Track</th>
								<th class="text-center">Delivery Time</th>
								<th class="text-center">Delivery Date</th>
								<th class="text-center">Order Time</th>
								<th class="text-center">Status</th>
                <th class="text-center">Action</th>

              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($orders as $data )
              <tr>
                <td class="text-center"><?= $no; ?></td>
                
								<td class="text-center">{{ $data->id }}</td>
								<td class="text-center">{{ $data->invoice_id }}</td>
								<td class="text-center">{{ $data->customer_id }}</td>
								<td class="text-center">{{ $data->name }}</td>
								<td class="text-center">{{ $data->phone }}</td>
								<td class="text-center">{{ $data->address }}</td>
								<td class="text-center">{{ $data->kelurahan }}</td>
								<td class="text-center">{{ $data->kecamatan }}</td>
								<td class="text-center">{{ $data->kota }}</td>
								<td class="text-center">{{ $data->provinsi }}</td>
								<td class="text-center">{{ $data->kode_pos }}</td>
								<td class="text-center">{{ $data->latitude }}</td>
								<td class="text-center">{{ $data->longitude }}</td>
								<td class="text-center">{{ $data->agent_id }}</td>
								<td class="text-center">{{ $data->agent_name }}</td>
								<td class="text-center">{{ $data->payment_method }}</td>
								<td class="text-center">{{ $data->payment_link }}</td>
								<td class="text-center">{{ $data->payment_date }}</td>
								<td class="text-center">{{ $data->buy_by }}</td>
								<td class="text-center">{{ $data->payment_total }}</td>
								<td class="text-center">{{ $data->coupon_id }}</td>
								<td class="text-center">{{ $data->payment_discount_code }}</td>
								<td class="text-center">{{ $data->payment_discount }}</td>
								<td class="text-center">{{ $data->payment_final }}</td>
								<td class="text-center">{{ $data->order_weight }}</td>
								<td class="text-center">{{ $data->order_distance }}</td>
								<td class="text-center">{{ $data->delivery_status }}</td>
								<td class="text-center">{{ $data->delivery_fee }}</td>
								<td class="text-center">{{ $data->delivery_track }}</td>
								<td class="text-center">{{ $data->delivery_time }}</td>
								<td class="text-center">{{ $data->delivery_date }}</td>
								<td class="text-center">{{ $data->order_time }}</td>
								<td class="text-center">{{ $data->status }}</td>
                <td class="text-center">
                  <a href="{{ url('orders/detail')}}/{{ $data->id }}" class="btn btn-success"><i class="fa fa-edit"></i> Detail</a>
                </td>
              </tr>
              <?php $no++; ?>
              @endforeach
            </tbody>
            </table>
            {{ $orders->links() }}
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
