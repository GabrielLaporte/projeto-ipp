@extends('layouts/contentLayoutMaster')

@section('title', 'Tour')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether-theme-arrows.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/shepherd.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tour.css')) }}">
@endsection

@section('content')
<!-- Basic tour -->
<section id="basic-tour">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tour</h4>
        </div>
        <div class="card-body">
          <div class="btn btn-outline-primary" id="tour">Start Tour</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Basic tour -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/extensions/tether.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/shepherd.min.js')) }}"></script>
@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-tour.js')) }}"></script>
@endsection
