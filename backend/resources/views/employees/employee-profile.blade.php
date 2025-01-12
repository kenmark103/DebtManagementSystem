
@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-5 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-lg-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4 class="mb-2 mt-lg-6">John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                <li class="list-inline-item">
                  <i class="ri-palette-line me-2 ri-24px"></i><span class="fw-medium">UX Designer</span>
                </li>
                <li class="list-inline-item">
                  <i class="ri-map-pin-line me-2 ri-24px"></i><span class="fw-medium">Vatican City</span>
                </li>
                <li class="list-inline-item">
                  <i class="ri-calendar-line me-2 ri-24px"></i><span class="fw-medium"> Joined April 2021</span></li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">
              <i class="ri-user-follow-line ri-16px me-1_5"></i>Connected
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-2 gap-lg-0">
        <li class="nav-item"><a class="nav-link active waves-effect waves-light" href="javascript:void(0);"><i class="ri-user-3-line me-1_5"></i>Profile</a></li>
        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/profile-teams"><i class="ri-team-line me-1_5"></i>Teams</a></li>
        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/profile-projects"><i class="ri-computer-line me-1_5"></i>Projects</a></li>
        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/profile-connections"><i class="ri-link-m me-1_5"></i>Connections</a></li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- User Profile Content -->
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">About</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Full Name:</span> <span>John Doe</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Status:</span> <span>Active</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-star-smile-line ri-24px"></i><span class="fw-medium mx-2">Role:</span> <span>Developer</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-flag-2-line ri-24px"></i><span class="fw-medium mx-2">Country:</span> <span>USA</span></li>
          <li class="d-flex align-items-center mb-2"><i class="ri-translate-2 ri-24px"></i><span class="fw-medium mx-2">Languages:</span> <span>English</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Contacts</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-phone-line ri-24px"></i><span class="fw-medium mx-2">Contact:</span> <span>(123) 456-7890</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-wechat-line ri-24px"></i><span class="fw-medium mx-2">Skype:</span> <span>john.doe</span></li>
          <li class="d-flex align-items-center mb-2"><i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Email:</span> <span>john.doe@example.com</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Teams</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-github-line ri-24px text-body me-2"></i>
            <div class="d-flex flex-wrap"><span class="fw-medium me-2">Backend Developer</span><span>(126 Members)</span></div>
          </li>
          <li class="d-flex align-items-center"><i class="ri-reactjs-line ri-24px text-body me-2"></i>
            <div class="d-flex flex-wrap"><span class="fw-medium me-2">React Developer</span><span>(98 Members)</span></div>
          </li>
        </ul>
      </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">Overview</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
          <li class="d-flex align-items-center mb-4"><i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Task Compiled:</span> <span>13.5k</span></li>
          <li class="d-flex align-items-center mb-4"><i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Projects Compiled:</span> <span>146</span></li>
          <li class="d-flex align-items-center"><i class="ri-star-smile-line ri-24px"></i><span class="fw-medium mx-2">Connections:</span> <span>897</span></li>
        </ul>
      </div>
    </div>
    <!--/ Profile Overview -->
  </div>
  <div class="col-xl-8 col-lg-7 col-md-7">
    <!-- Activity Timeline -->
    <div class="card card-action mb-6">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0"><i class="ri-bar-chart-2-line ri-24px text-body me-4"></i>Activity Timeline</h5>
      </div>
      <div class="card-body pt-3">
        <ul class="timeline card-timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">
                Invoices have been paid to the company
              </p>
              <div class="d-flex align-items-center mb-1">
                <div class="badge bg-lightest">
                  <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/misc/pdf.png" alt="img" width="15" class="me-2">
                  <span class="h6 mb-0">invoices.pdf</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">
                Project meeting with john @10:15am
              </p>
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                    <small>CEO of ThemeSelection</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">
                6 team members in a project
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                        <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar">
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Allen Rieske" data-bs-original-title="Allen Rieske">
                        <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png" alt="Avatar">
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Julee Rossignol" data-bs-original-title="Julee Rossignol">
                        <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar">
                      </li>
                      <li class="avatar">
                        <span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!--/ Activity Timeline -->
    <div class="row">
      <!-- Connections -->
      <div class="col-lg-12 col-xl-6">
        <div class="card card-action mb-6">
          <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Connections</h5>
            <div class="card-action-element">
              <div class="dropdown">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Share connections</a></li>
                  <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Suggest edits</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Report bug</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Cecilia Payne</h6>
                      <small>45 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-outline-primary btn-icon waves-effect"><i class="ri-user-add-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Curtis Fletcher</h6>
                      <small>1.32k Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-user-3-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Alice Stone</h6>
                      <small>125 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-user-3-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Darrell Barnes</h6>
                      <small>456 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-outline-primary btn-icon waves-effect"><i class="ri-user-add-line ri-22px"></i></button>
                  </div>
                </div>
              </li><li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/8.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Eugenia Moore</h6>
                      <small>1.2k Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-outline-primary btn-icon waves-effect"><i class="ri-user-add-line ri-22px"></i></button>
                  </div>
                </div>
              </li>
              <li class="text-center">
                <a href="javascript:;" class="btn btn-text-primary waves-effect">View all connections</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Connections -->
      <!-- Teams -->
      <div class="col-lg-12 col-xl-6">
        <div class="card card-action mb-6">
          <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Teams</h5>
            <div class="card-action-element">
              <div class="dropdown">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-2-line ri-22px text-muted"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Share teams</a></li>
                  <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Suggest edits</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Report bug</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/react-label.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">React Developers</h6>
                      <small>72 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-danger rounded-pill">Developer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/support-label.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Support Team</h6>
                      <small>122 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">Support</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/figma-label.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">UI Designers</h6>
                      <small>7 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-info rounded-pill">Designer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/vue-label.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-2">
                      <h6 class="mb-1">Vue.js Developers</h6>
                      <small>289 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-danger rounded-pill">Developer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/twitter-label.png" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="me-w">
                      <h6 class="mb-1">Digital Marketing</h6>
                      <small>24 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-secondary rounded-pill">Marketing</span></a>
                  </div>
                </div>
              </li>
              <li class="text-center">
                <a href="javascript:;" class="btn btn-text-primary waves-effect">View all teams</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Teams -->
    </div>

    <!-- Project table -->
    <div class="card mb-4">
      <h5 class="card-header">Project List</h5>
      <div class="card-datatable table-responsive pb-0 mb-n4">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><table class="table datatable-project table-border-bottom-0 dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" style="width: 922px;">
          <thead>
            <tr><th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 245px;" aria-label="Project: activate to sort column ascending" aria-sort="descending">Project</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 79px;" aria-label="leader: activate to sort column ascending">leader</th><th class="sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 113px; display: none;" aria-label="teams: activate to sort column ascending">teams</th><th class="sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 133px; display: none;" aria-label="Progress: activate to sort column ascending">Progress</th><th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 74px; display: none;" aria-label="Actions">Actions</th></tr>
          </thead><tbody><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/vue.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Vue Admin template</span><small>Vuejs Project</small></div></div></td><td><span class="text-heading">Georgie</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/18.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/17.png" alt="Avatar"></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:26%;" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">26%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/xamarin.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Hoffman Website</span><small>HTML Project</small></div></div></td><td><span class="text-heading">Jarvis</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar"></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">24%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/python.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Foodista Mobile App</span><small>Xamarin Project</small></div></div></td><td><span class="text-heading">Michelina</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/14.png" alt="Avatar"></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">53%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/sketch-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Foodista mobile app</span><small>iPhone Project</small></div></div></td><td><span class="text-heading">Merline</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar"></li><li class="avatar avatar-sm"><span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="top" title="6 more">+6</span></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">64%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/xd-label.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Falcon Logo Design</span><small>UI/UX Project</small></div></div></td><td><span class="text-heading">Owen</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar"></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">80%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/react-info.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Dojo React Project</span><small>React Project</small></div></div></td><td><span class="text-heading">Harmonia</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar"></li><li class="avatar avatar-sm"><span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="top" title="5 more">+5</span></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">10%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/figma-label-info.png" alt="Project Image" class="rounded-circle"></div></div><div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Dashboard Design</span><small>Vuejs Project</small></div></div></td><td><span class="text-heading">Keith</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><ul class="list-unstyled d-flex align-items-center avatar-group mb-0 z-2"><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/8.png" alt="Avatar"></li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up"><img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt="Avatar"></li></ul></div></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><div div="" class="progress rounded-pill w-px-75" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-heading ms-2">47%</div></div></td><td class="dtr-hidden" style="display: none;"><div><div class="dropdown"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow rounded-pill waves-effect" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="javascript:;" class="dropdown-item">Delete</a><a href="javascript:;" class="dropdown-item">View</a></div></div></div></td></tr></tbody>
        </table><div style="width: 1%;"></div></div>
      </div>
    </div>
    <!-- /Project table -->
  </div>
</div>
<!--/ User Profile Content -->
</div>
<!-- / Content -->
</div>
@endsection