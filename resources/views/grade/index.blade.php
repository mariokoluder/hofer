@extends('layouts.app')

@section('content')
<div class="main-content side-content pt-0">
  <div class="main-container container-fluid">
    <div class="inner-body">
      
      <!-- Page Header -->
      <div class="page-header">
        <div>
          <h2 class="main-content-title tx-24 mg-b-5">Materijal</h2>
        </div>
        <div class="d-flex">
          <div class="justify-content-center">
            <a href="{{ route('grades.create') }}" class="btn btn-primary my-2 btn-icon-text">
              <i class="fe fe-plus bg-white-transparent text-white"></i>
              <span>Novi materijal</span>
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
                        <th>Cijena</th>
                        <th>Koeficijent</th>
                        <th>Proizvođač</th>
                        <th>Akcije</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($grades as $grade)
                      <tr>
                        <td>{{ $grade->id }}</td>
                        <td>{{ $grade->ident }}</td>
                        <td>{{ $grade->title }}</td>
                        <td>{{ $grade->price/100 }} {{ $grade->currency }}</td>
                        <td>{{ $grade->coefficient }} | <a href="{{ route('grades.coef', $grade) }}">Preračunaj</a></td>
                        <td>{{ $grade->manufacturer->title }}</td>
                        <td>
                          <a href="{{ route('grades.edit', $grade) }}" class="btn ripple btn-outline-warning btn-sm" ><i class="fe fe-edit"></i> Uredi</a>
                          <button class="btn ripple btn-outline-danger btn-sm" data-bs-target="#modaldemo{{ $grade->id }}" data-bs-toggle="modal"><i class="fe fe-trash"></i> Izbriši</button>
                          <div class="modal fade" id="modaldemo{{ $grade->id }}">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content modal-content-demo">
                                <div class="modal-body">
                                  <p>Jeste li sigurni da želite izbrisati materijal <strong>{{ $grade->title }}</strong>?</p>
                                </div>
                                <div class="modal-footer">
                                  <form action="{{ route('grades.destroy', $grade) }}" method="POST" style="display:inline-block;">@method('DELETE') @csrf <button type="submit" class="btn ripple btn-outline-danger"><i class="fe fe-trash"></i> DA</button>
                                    <button type="reset" class="btn ripple" data-bs-dismiss="modal">NE</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
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
  @if (session('success'))
    <script> 
      $(document).ready(function() {
        notif({
          msg: "{{ session('success') }}",
          type: "success"
        });
      });
    </script>
  @endif
  
  @endsection