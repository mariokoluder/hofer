@extends('layouts.app')
@section('content')
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
      <div class="inner-body">
  
        <!-- Page Header -->
        <div class="page-header">
          <div>
            <h2 class="main-content-title tx-24 mg-b-5">Operacija</h2>
          </div>
          <div class="d-flex">
            <div class="justify-content-center">
              <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                <i class="fe fe-settings"></i>
                <span>Settings</span>
              </button>
              <button type="button" class="btn btn-primary my-2 btn-icon-text">
                <i class="fe fe-download-cloud bg-white-transparent text-white"></i>
                <span>Reports</span>
              </button>
            </div>
          </div>
        </div>
        <!-- End Page Header -->
  
        <!-- Row -->
        <div class="row row-sm">
          <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
              <div class="card-body">
                <ul>
                  @foreach($operation->cut_inserts as $cut_insert)
                    <li>Radni nalog: {{ $cut_insert->work_order->ident }} @if(!$cut_insert->insert_id) <a href="{{ route('operations.cut_inserts.create', $operation) }}"> Dodaj poziciju</a> @else {{ $cut_insert->insert_id }} @endif</li>
                  @endforeach
                </ul>

                <form action="{{ route('operations.cut_inserts.store', $operation) }}" method="POST">
                  @csrf
                  <div class="row row-sm">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="work_order_id" class="control-label">Broj radnog naloga</label>
                        <select class="form-control" name="work_order_id">
                          @foreach($work_orders as $work_order)
                          <option value="{{ $work_order->id }}">#{{ $work_order->ident }} | {{ $work_order->product->ident }}</option>
                          @endforeach
                        </select>    
                      </div>
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" class="btn ripple btn-primary" value="Spremi">  
                      </div>         
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
    </div>
  </div>
@endsection