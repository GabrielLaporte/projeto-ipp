@extends('layouts/contentLayoutMaster')

@section('title', 'Clipboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('vendors/css/extensions/toastr.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" href="{{asset('css/base/plugins/extensions/ext-component-toastr.css')}}">
@endsection

@section('content')
<!-- Copy to clipboard -->
<section id="copy-to-clipboard">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Clipboard</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 pe-sm-0">
              <div class="mb-1">
                <input type="text" class="form-control" id="copy-to-clipboard-input" value="Copy Me!" />
              </div>
            </div>
            <div class="col-sm-2 col-12">
              <button class="btn btn-outline-primary" id="btn-copy">Copy!</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Copy to clipboard -->
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/extensions/ext-component-clipboard.js')) }}"></script>
@endsection
