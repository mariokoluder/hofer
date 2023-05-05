@extends('layouts.app')
@section('content')
<div class="main-content side-content pt-0">
  <div class="main-container container-fluid">
    <div class="inner-body">

      <!-- Page Header -->
      <div class="page-header">
        <div>
          <h2 class="main-content-title tx-24 mg-b-5">Odrezana pozicija</h2>
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
              <form action="{{ route('operations.cut_inserts.store', $operation) }}" method="POST">
                @csrf
                <div class="row row-sm">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <input class="form-control @error('start_mass') is-invalid state-invalid @enderror" placeholder="Početna masa (g)" name="start_mass" type="text" value="{{ old('start_mass') }}">
                      <div class="small">Zajedno sa držačem</div>
                      @error('start_mass')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="disc_id" class="control-label">Broj ploče</label>
                      <select class="form-control" name="disc_id">
                        @foreach($discs as $disc)
                        <option value="{{ $disc->id }}">#{{ $disc->code }} | {{ $disc->grade->title }}</option>
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