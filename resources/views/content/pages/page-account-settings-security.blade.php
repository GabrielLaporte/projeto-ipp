@extends('layouts/contentLayoutMaster')

@section('title', 'Security')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel='stylesheet' href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <ul class="nav nav-pills mb-2">
      <!-- Account -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-account')}}">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class="nav-item">
        <a class="nav-link active" href="{{asset('page/account-settings-security')}}">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-billing')}}">
          <i data-feather="bookmark" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-notifications')}}">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-connections')}}">
          <i data-feather="link" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Connections</span>
        </a>
      </li>
    </ul>

    <!-- security -->

    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Change Password</h4>
      </div>
      <div class="card-body pt-1">
        <!-- form -->
        <form class="validate-form">
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="account-old-password">Current password</label>
              <div class="input-group form-password-toggle input-group-merge">
                <input
                  type="password"
                  class="form-control"
                  id="account-old-password"
                  name="password"
                  placeholder="Enter current password"
                  data-msg="Please current password"
                />
                <div class="input-group-text cursor-pointer">
                  <i data-feather="eye"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="account-new-password">New Password</label>
              <div class="input-group form-password-toggle input-group-merge">
                <input
                  type="password"
                  id="account-new-password"
                  name="new-password"
                  class="form-control"
                  placeholder="Enter new password"
                />
                <div class="input-group-text cursor-pointer">
                  <i data-feather="eye"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="account-retype-new-password">Retype New Password</label>
              <div class="input-group form-password-toggle input-group-merge">
                <input
                  type="password"
                  class="form-control"
                  id="account-retype-new-password"
                  name="confirm-new-password"
                  placeholder="Confirm your new password"
                />
                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
              </div>
            </div>
            <div class="col-12">
              <p class="fw-bolder">Password requirements:</p>
              <ul class="ps-1 ms-25">
                <li class="mb-50">Minimum 8 characters long - the more, the better</li>
                <li class="mb-50">At least one lowercase character</li>
                <li>At least one number, symbol, or whitespace character</li>
              </ul>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary me-1 mt-1">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- two-step verification -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Two-step verification</h4>
      </div>
      <div class="card-body my-2 py-25">
        <p class="fw-bolder">Two factor authentication is not enabled yet.</p>
        <p>
          Two-factor authentication adds an additional layer of security to your account by requiring <br />
          more than just a password to log in. Learn more.
        </p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuthModal">
          Enable two-factor authentication
        </button>
      </div>
    </div>
    <!-- / two-step verification -->

    <!-- create API key -->
    <div class="card">
      <div class="card-header pb-0">
        <h4 class="card-title">Create an API Key</h4>
      </div>
      <div class="row">
        <div class="col-md-5 order-md-0 order-1">
          <div class="card-body">
            <!-- form -->
            <form id="createApiForm" class="validate-form" onsubmit="return false">
              <div class="mb-2">
                <label for="ApiKeyType" class="form-label">Choose the Api key type you want to create</label>
                <select class="select2 form-select" id="ApiKeyType">
                  <option value="">Choose Key Type</option>
                  <option value="full" selected>Full Access</option>
                  <option value="modify">Modify</option>
                  <option value="read-execute">Read &amp; Execute</option>
                  <option value="folders">List Folder Contents</option>
                  <option value="read">Read Only</option>
                  <option value="read-write">Read &amp; Write</option>
                </select>
              </div>

              <div class="mb-2">
                <label for="nameApiKey" class="form-label">Name the API key</label>
                <input
                  class="form-control"
                  type="text"
                  name="apiKeyName"
                  placeholder="Server Key 1"
                  id="nameApiKey"
                  data-msg="Please enter API key name"
                />
              </div>

              <button type="submit" class="btn btn-primary w-100">Create Key</button>
            </form>
          </div>
        </div>
        <div class="col-md-7 order-md-1 order-0">
          <div class="text-center">
            <img
              class="img-fluid text-center"
              src="{{asset('images/illustration/pricing-Illustration.svg')}}"
              alt="illustration"
              width="310"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- / create API key -->

    <!-- api key list -->
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">API Key List & Access</h4>
      </div>
      <div class="card-body">
        <p class="card-text">
          An API key is a simple encrypted string that identifies an application without any principal. They are useful
          for accessing public data anonymously, and are used to associate API requests with your project for quota and
          billing.
        </p>

        <div class="row gy-2">
          <div class="col-12">
            <div class="bg-light-secondary position-relative rounded p-2">
              <div class="dropdown dropstart btn-pinned">
                <button
                  class="btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-4"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="edit-2" class="me-50"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="trash-2" class="me-50"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-1 me-1">Server Key 1</h4>
                <span class="badge badge-light-primary mb-1">Full Access</span>
              </div>
              <h6 class="d-flex align-items-center fw-bolder">
                <span class="me-50">23eaf7f0-f4f7-495e-8b86-fad3261282ac</span>
                <span><i data-feather="copy" class="font-medium-4 cursor-pointer"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 18:20 GTM+4:10</span>
            </div>
          </div>
          <div class="col-12">
            <div class="bg-light-secondary position-relative rounded p-2">
              <div class="dropdown dropstart btn-pinned">
                <button
                  class="btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0"
                  type="button"
                  id="dropdownMenuButton2"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-4"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="edit-2" class="me-50"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="trash-2" class="me-50"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-1 me-1">Server Key 2</h4>
                <span class="badge badge-light-primary mb-1">Read Only</span>
              </div>
              <h6 class="d-flex align-items-center fw-bolder">
                <span class="me-50">bb98e571-a2e2-4de8-90a9-2e231b5e99</span>
                <span><i data-feather="copy" class="font-medium-4 cursor-pointer"></i></span>
              </h6>
              <span>Created on 12 Feb 2021, 10:30 GTM+2:30</span>
            </div>
          </div>
          <div class="col-12">
            <div class="bg-light-secondary position-relative rounded p-2">
              <div class="dropdown dropstart btn-pinned">
                <button
                  class="btn btn-icon rounded-circle hide-arrow dropdown-toggle p-0"
                  type="button"
                  id="dropdownMenuButton3"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="font-medium-4"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="edit-2" class="me-50"></i><span>Edit</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i data-feather="trash-2" class="me-50"></i><span>Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-1 me-1">Server Key 3</h4>
                <span class="badge badge-light-primary mb-1">Full Access</span>
              </div>
              <h6 class="d-flex align-items-center fw-bolder">
                <span class="me-50">2e915e59-3105-47f2-8838-6e46bf83b711</span>
                <span><i data-feather="copy" class="font-medium-4 cursor-pointer"></i></span>
              </h6>
              <span>Created on 28 Apr 2021, 12:21 GTM+4:10</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / api key list -->

    <!-- recent device -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Recent devices</h4>
      </div>
      <div class="card-body my-2 py-25">
        <div class="table-responsive">
          <table class="table table-bordered text-nowrap text-center">
            <thead>
              <tr>
                <th class="text-start">BROWSER</th>
                <th>DEVICE</th>
                <th>LOCATION</th>
                <th>RECENT ACTIVITY</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="{{asset('images/icons/google-chrome.png')}}" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on Windows</span>
                </td>
                <td>Dell XPS 15</td>
                <td>United States</td>
                <td>10, Jan 2021 20:07</td>
              </tr>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="{{asset('images/icons/google-chrome.png')}}" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on Android</span>
                </td>
                <td>Google Pixel 3a</td>
                <td>Ghana</td>
                <td>11, Jan 2021 10:16</td>
              </tr>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="{{asset('images/icons/google-chrome.png')}}" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on MacOS</span>
                </td>
                <td>Apple iMac</td>
                <td>Mayotte</td>
                <td>11, Jan 2021 12:10</td>
              </tr>
              <tr>
                <td class="text-start">
                  <div class="avatar me-25">
                    <img src="{{asset('images/icons/google-chrome.png')}}" alt="avatar" width="20" height="20" />
                  </div>
                  <span class="fw-bolder">Chrome on iPhone</span>
                </td>
                <td>Apple iPhone XR</td>
                <td>Mauritania</td>
                <td>12, Jan 2021 8:29</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / recent device -->
    <!--/ security -->
  </div>
</div>

@include('content/_partials/_modals/modal-two-factor-auth')
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/modal-two-factor-auth.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/page-account-settings-security.js')) }}"></script>
@endsection
