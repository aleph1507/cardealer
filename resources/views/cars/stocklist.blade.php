@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="row" id="closed-filter-row">
    </div>
    <div class="row" id="car-row">
      <div id="filter-col" class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
        @include('partials._filter')
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 car-thumb-col">
        @include('partials._car_thumbnail')
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 car-thumb-col">
        @include('partials._car_thumbnail')
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 car-thumb-col">
        @include('partials._car_thumbnail')
      </div>
    </div>
  </div>

@endsection