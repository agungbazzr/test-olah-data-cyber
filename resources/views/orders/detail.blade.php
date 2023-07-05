@extends('layouts.app')

@section('title', 'CYBER_DATA | Detail Order')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Detail Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Orders</a></li>
              <li class="breadcrumb-item active">Detail Order</li>
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
         
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table id="tbl_data" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Id</th>
                <th class="text-center">Product Id</th>
                <th class="text-center">Order Id</th>
                <th class="text-center">Price</th>
                <th class="text-center">Price Agent</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Total Price</th>

              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($orders as $data )
              <tr>
                <td class="text-center"><?= $no; ?></td>
                <td class="text-center">{{ $data->id }}</td>
                <td class="text-center">{{ $data->product_id }}</td>
                <td class="text-center">{{ $data->order_id }}</td>
                <td class="text-center">{{ $data->price }}</td>
                <td class="text-center">{{ $data->price_agent }}</td>
                <td class="text-center">{{ $data->qty }}</td>
                <td class="text-center">{{ $data->total_price }}</td>
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