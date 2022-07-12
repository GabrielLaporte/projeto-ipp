@extends('layouts/contentLayoutMaster')

@section('title', 'Tree')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('fonts/font-awesome/css/font-awesome.min.css'))}}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jstree.min.css'))}}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tree.css')) }}">
@endsection

@section('content')
<!-- Tree section -->
<section class="basic-custom-icons-tree">
  <div class="row">
    <!-- Basic Tree -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic</h4>
        </div>
        <div class="card-body">
          <div id="jstree-basic">
            <ul>
              <li data-jstree='{"icon" : "far fa-folder"}'>
                css
                <ul>
                  <li data-jstree='{"icon" : "fab fa-css3-alt"}'>app.css</li>
                  <li data-jstree='{"icon" : "fab fa-css3-alt"}'>style.css</li>
                </ul>
              </li>
              <li class="jstree-open" data-jstree='{"icon" : "far fa-folder"}'>
                img
                <ul data-jstree='{"icon" : "far fa-folder"}'>
                  <li data-jstree='{"icon" : "far fa-file-image"}'>bg.jpg</li>
                  <li data-jstree='{"icon" : "far fa-file-image"}'>logo.png</li>
                  <li data-jstree='{"icon" : "far fa-file-image"}'>avatar.png</li>
                </ul>
              </li>
              <li class="jstree-open" data-jstree='{"icon" : "far fa-folder"}'>
                js
                <ul>
                  <li data-jstree='{"icon" : "fab fa-node-js"}'>jquery.js</li>
                  <li data-jstree='{"icon" : "fab fa-node-js"}'>app.js</li>
                </ul>
              </li>
              <li data-jstree='{"icon" : "fab fa-html5"}'>index.html</li>
              <li data-jstree='{"icon" : "fab fa-html5"}'>page-one.html</li>
              <li data-jstree='{"icon" : "fab fa-html5"}'>page-two.html</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/ Basic Tree -->

    <!-- Custom Icons Tree -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Custom Icons</h4>
        </div>
        <div class="card-body">
          <div id="jstree-custom-icons"></div>
        </div>
      </div>
    </div>
    <!--/ Custom Icons Tree -->
  </div>
</section>

<section class="context-drag-drop-tree">
  <div class="row">
    <!-- Context Menu Tree -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Context Menu</h4>
        </div>
        <div class="card-body">
          <div id="jstree-context-menu"></div>
        </div>
      </div>
    </div>
    <!--/ Context Menu Tree -->

    <!-- Drag & Drop Tree -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Drag & Drop</h4>
        </div>
        <div class="card-body">
          <div id="jstree-drag-drop"></div>
        </div>
      </div>
    </div>
    <!--/ Drag & Drop Tree -->
  </div>
</section>

<section class="context-drag-drop-tree">
  <div class="row">
    <!-- Checkbox Tree -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Checkbox</h4>
        </div>
        <div class="card-body">
          <div id="jstree-checkbox"></div>
        </div>
      </div>
    </div>
    <!--/ Checkbox Tree -->

    <!-- Ajax Tree -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Ajax</h4>
        </div>
        <div class="card-body">
          <div id="jstree-ajax"></div>
        </div>
      </div>
    </div>
    <!--/ Ajax Tree -->
  </div>
</section>
<!--/ Tree section -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-tree.js')) }}"></script>
@endsection
