@extends('layouts/contentLayoutMaster')

@section('title', 'Profile')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-profile.css')) }}">
@endsection

@section('content')
<div id="user-profile">
  <!-- profile header -->
  <div class="row">
    <div class="col-12">
      <div class="card profile-header mb-2">
        <!-- profile cover photo -->
        <img
          class="card-img-top"
          src="{{asset('images/profile/user-uploads/timeline.jpg')}}"
          alt="User Profile Image"
        />
        <!--/ profile cover photo -->

        <div class="position-relative">
          <!-- profile picture -->
          <div class="profile-img-container d-flex align-items-center">
            <div class="profile-img">
              <img
                src="{{asset('images/portrait/small/avatar-s-2.jpg')}}"
                class="rounded img-fluid"
                alt="Card image"
              />
            </div>
            <!-- profile title -->
            <div class="profile-title ms-3">
              <h2 class="text-white">Kitty Allanson</h2>
              <p class="text-white">UI/UX Designer</p>
            </div>
          </div>
        </div>

        <!-- tabs pill -->
        <div class="profile-header-nav">
          <!-- navbar -->
          <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
            <button
              class="btn btn-icon navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i data-feather="align-justify" class="font-medium-5"></i>
            </button>

            <!-- collapse  -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                <ul class="nav nav-pills mb-0">
                  <li class="nav-item">
                    <a class="nav-link fw-bold active" href="#">
                      <span class="d-none d-md-block">Feed</span>
                      <i data-feather="rss" class="d-block d-md-none"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">
                      <span class="d-none d-md-block">About</span>
                      <i data-feather="info" class="d-block d-md-none"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">
                      <span class="d-none d-md-block">Photos</span>
                      <i data-feather="image" class="d-block d-md-none"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">
                      <span class="d-none d-md-block">Friends</span>
                      <i data-feather="users" class="d-block d-md-none"></i>
                    </a>
                  </li>
                </ul>
                <!-- edit button -->
                <button class="btn btn-primary">
                  <i data-feather="edit" class="d-block d-md-none"></i>
                  <span class="fw-bold d-none d-md-block">Edit</span>
                </button>
              </div>
            </div>
            <!--/ collapse  -->
          </nav>
          <!--/ navbar -->
        </div>
      </div>
    </div>
  </div>
  <!--/ profile header -->

  <!-- profile info section -->
  <section id="profile-info">
    <div class="row">
      <!-- left profile info section -->
      <div class="col-lg-3 col-12 order-2 order-lg-1">
        <!-- about -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-75">About</h5>
            <p class="card-text">
              Tart I love sugar plum I love oat cake. Sweet ⭐️ roll caramels I love jujubes. Topping cake wafer.
            </p>
            <div class="mt-2">
              <h5 class="mb-75">Joined:</h5>
              <p class="card-text">November 15, 2015</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-75">Lives:</h5>
              <p class="card-text">New York, USA</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-75">Email:</h5>
              <p class="card-text">bucketful@fiendhead.org</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-50">Website:</h5>
              <p class="card-text mb-0">www.pixinvent.com</p>
            </div>
          </div>
        </div>
        <!--/ about -->

        <!-- suggestion pages -->
        <div class="card">
          <div class="card-body profile-suggestion">
            <h5 class="mb-2">Suggested Pages</h5>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="{{asset('images/avatars/12-small.png')}}" alt="avatar img" height="40" width="40" />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Peter Reed</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><i data-feather="star" class="font-medium-3"></i></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="{{asset('images/avatars/1-small.png')}}" alt="avatar" height="40" width="40" />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Harriett Adkins</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><i data-feather="star" class="font-medium-3"></i></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="{{asset('images/avatars/10-small.png')}}" alt="avatar" height="40" width="40" />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Juan Weaver</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><i data-feather="star" class="font-medium-3"></i></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="{{asset('images/avatars/3-small.png')}}" alt="avatar img" height="40" width="40" />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Claudia Chandler</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><i data-feather="star" class="font-medium-3"></i></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="{{asset('images/avatars/5-small.png')}}" alt="avatar img" height="40" width="40" />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Earl Briggs</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto">
                <i data-feather="star" class="profile-favorite font-medium-3"></i>
              </div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar me-1">
                <img src="{{asset('images/avatars/6-small.png')}}" alt="avatar img" height="40" width="40" />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Jonathan Lyons</h6>
                <small class="text-muted">Beauty Store</small>
              </div>
              <div class="profile-star ms-auto"><i data-feather="star" class="font-medium-3"></i></div>
            </div>
          </div>
        </div>
        <!--/ suggestion pages -->

        <!-- twitter feed card -->
        <div class="card">
          <div class="card-body">
            <h5>Twitter Feeds</h5>
            <!-- twitter feed -->
            <div class="profile-twitter-feed mt-1">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar me-1">
                  <img src="{{asset('images/avatars/5-small.png')}}" alt="avatar img" height="40" width="40" />
                </div>
                <div class="profile-user-info">
                  <h6 class="mb-0">Gertrude Stevens</h6>
                  <a href="#">
                    <small class="text-muted">@tiana59</small>
                    <i data-feather="check-circle"></i>
                  </a>
                </div>
                <div class="profile-star ms-auto">
                  <i data-feather="star" class="font-medium-3"></i>
                </div>
              </div>
              <p class="card-text mb-50">I love cookie chupa chups sweet tart apple pie ⭐️ chocolate bar.</p>
              <a href="#">
                <small>#design #fasion</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class="profile-twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar me-1">
                  <img src="{{asset('images/avatars/12-small.png')}}" alt="avatar img" height="40" width="40" />
                </div>
                <div class="profile-user-info">
                  <h6 class="mb-0">Lura Jones</h6>
                  <a href="#">
                    <small class="text-muted">@tiana59</small>
                    <i data-feather="check-circle"></i>
                  </a>
                </div>
                <div class="profile-star ms-auto">
                  <i data-feather="star" class="font-medium-3 profile-favorite"></i>
                </div>
              </div>
              <p class="card-text mb-50">Halvah I love powder jelly I love cheesecake cotton candy. 😍</p>
              <a href="#">
                <small>#vuejs #code #coffeez</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class="profile-twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar me-1">
                  <img src="{{asset('images/avatars/1-small.png')}}" alt="avatar img" height="40" width="40" />
                </div>
                <div class="profile-user-info">
                  <h6 class="mb-0">Norman Gross</h6>
                  <a href="#">
                    <small class="text-muted">@tiana59</small>
                    <i data-feather="check-circle"></i>
                  </a>
                </div>
                <div class="profile-star ms-auto">
                  <i data-feather="star" class="font-medium-3"></i>
                </div>
              </div>
              <p class="card-text mb-50">Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake.</p>
              <a href="#">
                <small>#sketch #uiux #figma</small>
              </a>
            </div>
          </div>
        </div>
        <!--/ twitter feed card -->
      </div>
      <!--/ left profile info section -->

      <!-- center profile info section -->
      <div class="col-lg-6 col-12 order-1 order-lg-2">
        <!-- post 1 -->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <!-- avatar -->
              <div class="avatar me-1">
                <img
                  src="{{asset('images/portrait/small/avatar-s-18.jpg')}}"
                  alt="avatar img"
                  height="50"
                  width="50"
                />
              </div>
              <!--/ avatar -->
              <div class="profile-user-info">
                <h6 class="mb-0">Leeanna Alvord</h6>
                <small class="text-muted">12 Dec 2018 at 1:16 AM</small>
              </div>
            </div>
            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class="img-fluid rounded mb-75"
              src="{{asset('images/profile/post-media/2.jpg')}}"
              alt="avatar img"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                  <i data-feather="heart" class="profile-likes font-medium-3 me-50"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ms-1">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Trina Lynes"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Lilian Nenez"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-2.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Alberto Glotzbach"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-3.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="George Nordic"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-4.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                  <a href="#" class="text-muted text-nowrap ms-50">+140 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="#" class="text-nowrap">
                  <i data-feather="message-square" class="text-body font-medium-3 me-50"></i>
                  <span class="text-muted me-1">1.25k</span>
                </a>

                <a href="#" class="text-nowrap">
                  <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-6.jpg')}}"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="#">
                    <i data-feather="heart" class="text-body font-medium-3"></i>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-8.jpg')}}"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Jackey Potter</h6>
                  <a href="#">
                    <i data-feather="heart" class="profile-likes font-medium-3"></i>
                    <span class="align-middle text-muted">61</span>
                  </a>
                </div>
                <small>
                  Unlimited color🖌 options allows you to set your application color as per your branding 🤪.
                </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment box -->
            <fieldset class="mb-75">
              <label class="form-label" for="label-textarea">Add Comment</label>
              <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
            </fieldset>
            <!--/ comment box -->
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <!--/ post 1 -->

        <!-- post 2 -->
        <div class="card">
          <div class="card-body">
            <!-- avatar image and title -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img
                  src="{{asset('images/portrait/small/avatar-s-22.jpg')}}"
                  alt="avatar img"
                  height="50"
                  width="50"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Rosa Walters</h6>
                <small class="text-muted">11 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image and title -->
            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class="img-fluid rounded mb-75"
              src="{{asset('images/profile/post-media/25.jpg')}}"
              alt="avatar img"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                  <i data-feather="heart" class="profile-likes font-medium-3 me-50"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ms-1">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Trina Lynes"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Lilian Nenez"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-2.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Alberto Glotzbach"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-3.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="George Nordic"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-4.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                  <a href="#" class="text-muted text-nowrap ms-50">+271 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="#" class="text-nowrap">
                  <i data-feather="message-square" class="text-body font-medium-3 me-50"></i>
                  <span class="text-muted me-1">1.25k</span>
                </a>

                <a href="#" class="text-nowrap">
                  <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-50">
                <img
                  src="{{asset('images/portrait/small/avatar-s-3.jpg')}}"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="#">
                    <i data-feather="heart" class="text-body font-medium-3"></i>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly. </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment text area -->
            <fieldset class="mb-75">
              <label class="form-label" for="label-textarea2">Add Comment</label>
              <textarea class="form-control" id="label-textarea2" rows="3" placeholder="Add Comment"></textarea>
            </fieldset>
            <!--/ comment text area -->
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <!--/ post 2 -->

        <!-- post 3 -->
        <div class="card">
          <div class="card-body">
            <!-- avatar image title -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img
                  src="{{asset('images/portrait/small/avatar-s-15.jpg')}}"
                  alt="avatar img"
                  height="50"
                  width="50"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Charles Watson</h6>
                <small class="text-muted">12 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image title -->

            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>

            <!-- video -->
            <iframe
              src="https://www.youtube.com/embed/6stlCkUDG_s"
              class="w-100 rounded border-0 height-250 mb-50"
            ></iframe>
            <!--/ video -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                  <i data-feather="heart" class="profile-likes font-medium-3 me-50"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ms-1">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Elicia Rieske"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Julee Rossignol"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-10.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Darcey Nooner"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-8.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="bottom"
                      title="Elicia Rieske"
                      class="avatar pull-up"
                    >
                      <img
                        src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                  <a href="#" class="text-muted text-nowrap ms-50">+264 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="#" class="text-nowrap">
                  <i data-feather="message-square" class="text-body font-medium-3 me-50"></i>
                  <span class="text-muted me-1">1.25k</span>
                </a>

                <a href="#" class="text-nowrap">
                  <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comment -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-50">
                <img
                  src="{{asset('images/portrait/small/avatar-s-3.jpg')}}"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-content-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="#">
                    <i data-feather="heart" class="text-body font-medium-3"></i>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <!-- comment -->

            <!-- comment text area -->
            <fieldset class="mb-75">
              <label class="form-label" for="label-textarea3">Add Comment</label>
              <textarea class="form-control" id="label-textarea3" rows="3" placeholder="Add Comment"></textarea>
            </fieldset>
            <!-- comment text area -->
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <!--/ post 3 -->
      </div>
      <!--/ center profile info section -->

      <!-- right profile info section -->
      <div class="col-lg-3 col-12 order-3">
        <!-- latest profile pictures -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-0">Latest Photos</h5>
            <div class="row">
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-13.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-02.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-03.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-04.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-05.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-06.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-07.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-08.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img
                    src="{{asset('images/profile/user-uploads/user-09.jpg')}}"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ latest profile pictures -->

        <!-- suggestion -->
        <div class="card">
          <div class="card-body">
            <h5>Suggestions</h5>
            <div class="d-flex justify-content-start align-items-center mt-2">
              <div class="avatar me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                  alt="avatar"
                  height="40"
                  width="40"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Peter Reed</h6>
                <small class="text-muted">6 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-primary btn-icon btn-sm ms-auto">
                <i data-feather="user-plus"></i>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-6.jpg')}}"
                  alt="avtar img holder"
                  height="40"
                  width="40"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Harriett Adkins</h6>
                <small class="text-muted">3 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-primary btn-sm btn-icon ms-auto">
                <i data-feather="user-plus"></i>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                  alt="avatar"
                  height="40"
                  width="40"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Juan Weaver</h6>
                <small class="text-muted">1 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto">
                <i data-feather="user-plus"></i>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-8.jpg')}}"
                  alt="avatar img"
                  height="40"
                  width="40"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Claudia Chandler</h6>
                <small class="text-muted">16 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto">
                <i data-feather="user-plus"></i>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
                  alt="avatar img"
                  height="40"
                  width="40"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Earl Briggs</h6>
                <small class="text-muted">4 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto">
                <i data-feather="user-plus"></i>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img
                  src="{{asset('images/portrait/small/avatar-s-10.jpg')}}"
                  alt="avatar img"
                  height="40"
                  width="40"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Jonathan Lyons</h6>
                <small class="text-muted">25 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto">
                <i data-feather="user-plus"></i>
              </button>
            </div>
          </div>
        </div>
        <!--/ suggestion -->

        <!-- polls card -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-1">Polls</h5>
            <p class="card-text mb-0">Who is the best actor in Marvel Cinematic Universe?</p>

            <!-- polls -->
            <div class="profile-polls-info mt-2">
              <!-- custom radio -->
              <div class="d-flex justify-content-between">
                <div class="form-check">
                  <input type="radio" id="bestActorPoll1" name="bestActorPoll" class="form-check-input" />
                  <label class="form-check-label" for="bestActorPoll1">RDJ</label>
                </div>
                <div class="text-end">82%</div>
              </div>
              <!--/ custom radio -->

              <!-- progressbar -->
              <div class="progress progress-bar-primary my-50">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="58"
                  aria-valuemin="58"
                  aria-valuemax="100"
                 "
                ></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltip -->
              <div class="avatar-group my-1">
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Tonia Seabold"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-12.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Carissa Dolle"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-5.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Kelle Herrick"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Len Bregantini"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-10.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="John Doe"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
              </div>
              <!--/ avatar group with tooltip -->
            </div>

            <div class="profile-polls-info mt-2">
              <div class="d-flex justify-content-between">
                <!-- custom radio -->
                <div class="form-check">
                  <input type="radio" id="bestActorPoll2" name="bestActorPoll" class="form-check-input" />
                  <label class="form-check-label" for="bestActorPoll2">Chris Hemswort</label>
                </div>
                <!--/ custom radio -->
                <div class="text-end">67%</div>
              </div>
              <!-- progressbar -->
              <div class="progress progress-bar-primary my-50">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="16"
                  aria-valuemin="16"
                  aria-valuemax="100"
                 "
                ></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltips -->
              <div class="avatar-group mt-1">
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Liliana Pecor"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Kasandra NaleVanko"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
                <div
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="bottom"
                  title="Jonathan Lyons"
                  class="avatar pull-up"
                >
                  <img
                    src="{{asset('images/portrait/small/avatar-s-8.jpg')}}"
                    alt="Avatar"
                    height="26"
                    width="26"
                  />
                </div>
              </div>
              <!--/ avatar group with tooltips-->
            </div>
            <!--/ polls -->
          </div>
        </div>
        <!--/ polls card -->
      </div>
      <!--/ right profile info section -->
    </div>

    <!-- reload button -->
    <div class="row">
      <div class="col-12 text-center">
        <button type="button" class="btn btn-sm btn-primary block-element border-0 mb-1">Load More</button>
      </div>
    </div>
    <!--/ reload button -->
  </section>
  <!--/ profile info section -->
</div>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/page-profile.js')) }}"></script>
@endsection
