@extends('layouts.app')
@section('content')
<div class="main-content side-content pt-0">
  <div class="main-container container-fluid">
    <div class="inner-body">
      
      <!-- Page Header -->
      <div class="page-header">
        <div>
          <h2 class="main-content-title tx-24 mg-b-5">Dobavljači</h2>
        </div>
      </div>
      <!-- End Page Header -->
      
      <!-- Row -->
      <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
          <div class="card custom-card">
            <div class="card-body">
              <form action="{{ route('manufacturers.update', $manufacturer) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row row-sm">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <input class="form-control @error('title') is-invalid state-invalid @enderror" placeholder="Ime" name="title" type="text" value="{{ old('title', $manufacturer) }}">
                      @error('title')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
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