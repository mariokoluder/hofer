@extends('layouts.app')
@section('content')
<div class="main-content side-content pt-0">
  <div class="main-container container-fluid">
    <div class="inner-body">

      <!-- Page Header -->
      <div class="page-header">
        <div>
          <h2 class="main-content-title tx-24 mg-b-5">Ploče</h2>
        </div>
      </div>
      <!-- End Page Header -->

      <!-- Row -->
      <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
          <div class="card custom-card">
            <div class="card-body">
              <form action="{{ route('discs.store') }}" method="POST">
                @csrf
                <div class="row row-sm">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <input class="form-control @error('code') is-invalid state-invalid @enderror" placeholder="Šifra ploče" name="code" type="text" value="{{ old('code') }}">
                      @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="grade_id" class="control-label">Materijal</label>
                      <select class="form-control" name="grade_id">
                        @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->ident }} | {{ $grade->title }}</option>
                        @endforeach
                      </select>    
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <input class="form-control @error('mass') is-invalid state-invalid @enderror" placeholder="Masa ploče(g)" name="mass" type="text" value="{{ old('mass') }}">
                      @error('mass')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <input class="form-control @error('lot_number') is-invalid state-invalid @enderror" placeholder="Lot broj" name="lot_number" type="text" value="{{ old('lot_number') }}">
                      @error('lot_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="location" class="control-label">Lokacija</label>
                    <select class="form-control" name="location">
                      <option value="undefined" @if(old('location') == 'undefined') selected="selected" @endif>Nije definirano</option>
                      <option value="stock" @if(old('location') == 'stock') selected="selected" @endif>Skladište</option>
                      <option value="warehause" @if(old('location') == 'warehause') selected="selected" @endif>Skladište proizvodnja</option>
                      <option value="machine" @if(old('location') == 'machine') selected="selected" @endif>U stroju</option>
                      <option value="used" @if(old('location') == 'used') selected="selected" @endif>Iskorišteno</option>
                    </select>    
                  </div>
                </div>
                  
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" class="btn ripple btn-primary" value="Spremi">  
                    </div>         
                  </div>
                </div>
`              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>
  </div>
</div>
@endsection