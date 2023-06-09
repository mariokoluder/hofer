@extends('layouts.app')
@section('content')
<div class="main-content side-content pt-0">
  <div class="main-container container-fluid">
    <div class="inner-body">
      
      <!-- Page Header -->
      <div class="page-header">
        <div>
          <h2 class="main-content-title tx-24 mg-b-5">Proizvodi</h2>
        </div>
        <div class="d-flex">
          <div class="justify-content-center">
            <a href="{{ route('products.create') }}" class="btn btn-primary my-2 btn-icon-text">
              <i class="fe fe-plus bg-white-transparent text-white"></i>
              <span>Novi proizvod</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Page Header -->
      
      <!-- Row -->
      <div class="row row-sm">
        <div class="col-lg-12">
          <div class="card custom-card overflow-hidden">
            <div class="card-body">
              <div>
                <!--<h6 class="main-content-label mb-1">Basic DataTable</h6>
                <p class="text-muted card-sub-title">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>-->
              </div>
              <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ident</th>
                      <th>Naziv</th>
                      <th>Akcije</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->ident }}</td>
                        <td>
                          <strong>{{ $product->title }}</strong>
                          @foreach ($product->inserts as $insert)
                          <br>
                            {{ $insert->position }} | {{ $insert->quantity }} | {{ $insert->grade->ident }} {{ $insert->grade->title }} | {{ $insert->surface / 100 }} mm2 | {{ ($insert->surface/100) * $insert->grade->coefficient }} g
                          @endforeach
                        </td>
                        <td><a href="{{ route('products.inserts.create', $product) }}">Dodaj poziciju</a></td>
                        
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>
  </div>
</div>
@endsection


@section('scripts')
  <script src="{{ asset('dashplex/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/jszip.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('dashplex/js/table-data.js') }}"></script>
  <script src="{{ asset('dashplex/plugins/notify/js/notifIt.js') }}"></script>
  @if (session('delete_success'))
  <script> 

    $(document).ready(function() {
      notif({
		msg: "{{ session('delete_success') }}",
		type: "success"
	});
    });
    </script>
  @endif
  
@endsection