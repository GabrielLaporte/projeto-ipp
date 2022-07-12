@extends('layouts/contentLayoutMaster')

@section('title', 'Ratings')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jquery.rateyo.min.css'))}}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-ratings.css')) }}">
@endsection

@section('content')
<div class="row">
  <!-- Basic -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Basic</h4>
      </div>
      <div class="card-body">
        <div class="basic-ratings"></div>
      </div>
    </div>
  </div>
  <!--/ Basic -->

  <!-- Readonly -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Read Only</h4>
      </div>
      <div class="card-body">
        <div class="read-only-ratings" data-rateyo-read-only="true"></div>
      </div>
    </div>
  </div>
  <!--/ Readonly -->

  <!-- Custom SVG -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Custom SVG</h4>
      </div>
      <div class="card-body">
        <div class="custom-svg-ratings"></div>
      </div>
    </div>
  </div>
  <!--/ Custom SVG -->

  <!-- Half Star -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Half Star</h4>
      </div>
      <div class="card-body">
        <div class="half-star-ratings" data-rateyo-half-star="true"></div>
      </div>
    </div>
  </div>
  <!--/ Half Star -->

  <!-- Full Star -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Full Star</h4>
      </div>
      <div class="card-body">
        <div class="full-star-ratings" data-rateyo-full-star="true"></div>
      </div>
    </div>
  </div>
  <!--/ Full Star -->

  <!-- Multicolor -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Multicolor</h4>
      </div>
      <div class="card-body">
        <div class="multi-color-ratings"></div>
      </div>
    </div>
  </div>
  <!--/ Multicolor -->

  <!-- Events -->
  <div class="col-xl-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Events</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md d-flex flex-column align-items-start mb-sm-0 mb-1">
            <p class="card-text fw-semibold mb-25">onSet Event</p>
            <div class="onset-event-ratings"></div>
          </div>
          <div class="col-md d-flex flex-column align-items-start">
            <p class="card-text fw-semibold mb-25">onChange Event</p>
            <div class="onChange-event-ratings"></div>
            <div class="counter-wrapper mt-1">
              <strong>Ratings:</strong>
              <span class="counter"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Events -->

  <!-- Methods -->
  <div class="col-xl-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Methods</h4>
      </div>
      <div class="card-body">
        <div class="methods-ratings"></div>
        <div class="demo-inline-spacing">
          <button class="btn btn-outline-primary btn-sm btn-initialize">Initialize</button>
          <button class="btn btn-outline-primary btn-sm btn-get-rating">Get Ratings</button>
          <button class="btn btn-outline-primary btn-sm btn-set-rating">Set Ratings to 1</button>
          <button class="btn btn-outline-danger btn-sm btn-destroy">Destroy</button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Methods -->
</div>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/extensions/jquery.rateyo.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-ratings.js')) }}"></script>
@endsection
