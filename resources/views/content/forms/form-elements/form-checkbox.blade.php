
@extends('layouts/contentLayoutMaster')

@section('title', 'Checkbox')

@section('content')
<!-- Basic Checkbox start -->
<section id="basic-checkbox">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Checkboxes</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked />
              <label class="form-check-label" for="inlineCheckbox1">Checked</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="unchecked" />
              <label class="form-check-label" for="inlineCheckbox2">Unchecked</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="checkbox"
                id="inlineCheckbox3"
                value="checked-disabled"
                checked
                disabled
              />
              <label class="form-check-label" for="inlineCheckbox3">Checked disabled</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="checkbox"
                id="inlineCheckbox4"
                value="unchecked-disabled"
                disabled
              />
              <label class="form-check-label" for="inlineCheckbox4">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Checkbox end -->

<!-- Checkbox Color start -->
<section id="vuexy-checkbox-color">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            To change the color of the checkBox use the <code>.form-check-{value}</code> for primary, secondary,
            success, danger, info, warning.
          </p>
          <div class="demo-inline-spacing">
            <div class="form-check form-check-primary">
              <input type="checkbox" class="form-check-input" id="colorCheck1" checked />
              <label class="form-check-label" for="colorCheck1">Primary</label>
            </div>
            <div class="form-check form-check-secondary">
              <input type="checkbox" class="form-check-input" id="colorCheck2" checked />
              <label class="form-check-label" for="colorCheck2">Secondary</label>
            </div>
            <div class="form-check form-check-success">
              <input type="checkbox" class="form-check-input" id="colorCheck3" checked />
              <label class="form-check-label" for="colorCheck3">Success</label>
            </div>
            <div class="form-check form-check-danger">
              <input type="checkbox" class="form-check-input" id="colorCheck5" checked />
              <label class="form-check-label" for="colorCheck5">Danger</label>
            </div>
            <div class="form-check form-check-warning">
              <input type="checkbox" class="form-check-input" id="colorCheck4" checked />
              <label class="form-check-label" for="colorCheck4">Warning</label>
            </div>
            <div class="form-check form-check-info">
              <input type="checkbox" class="form-check-input" id="colorCheck6" checked />
              <label class="form-check-label" for="colorCheck6">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Checkbox Color end -->
@endsection
