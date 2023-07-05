@extends('layouts.app')

@section('title', 'CYBER_DATA | Product')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> Product</a></li>
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
          <h3 class="card-title">Data Product</h3>

          <div class="text-right">
            <a href="{{ route('product.top') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> TOP 10 PRODUCT</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="tbl_data" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                
								<th class="text-center">Id</th>
								<th class="text-center">Product Name</th>
								<th class="text-center">Category</th>
								<th class="text-center">Type</th>
								<th class="text-center">Item</th>
								<th class="text-center">Weight</th>
								<th class="text-center">Sku</th>
								<th class="text-center">Price Sell</th>
								<th class="text-center">Price Promo</th>
								<th class="text-center">Price Agent</th>
								<th class="text-center">Photo</th>
								<th class="text-center">Recommendation</th>
								<th class="text-center">Description</th>
								<th class="text-center">Status</th>
								<th class="text-center">Ordering</th>

              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($product as $data )
              <tr>
                <td class="text-center"><?= $no; ?></td>
                
								<td class="text-center">{{ $data->id }}</td>
								<td class="text-center">{{ $data->product_name }}</td>
								<td class="text-center">{{ $data->category }}</td>
								<td class="text-center">{{ $data->type }}</td>
								<td class="text-center">{{ $data->item }}</td>
								<td class="text-center">{{ $data->weight }}</td>
								<td class="text-center">{{ $data->sku }}</td>
								<td class="text-center">{{ $data->price_sell }}</td>
								<td class="text-center">{{ $data->price_promo }}</td>
								<td class="text-center">{{ $data->price_agent }}</td>
								<td class="text-center">{{ $data->photo }}</td>
								<td class="text-center">{{ $data->recommendation }}</td>
								<td class="text-center">{{ $data->description }}</td>
								<td class="text-center">{{ $data->status }}</td>
								<td class="text-center">{{ $data->ordering }}</td>
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
