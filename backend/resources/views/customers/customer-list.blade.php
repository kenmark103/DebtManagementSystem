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
            
            
<div class="row g-6 mb-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Session</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">21,459</h4>
              <p class="text-success mb-1">(+29%)</p>
            </div>
            <small class="mb-0">Total Users</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded">
              <div class="ri-group-line ri-26px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Paid Users</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">4,567</h4>
              <p class="text-success mb-1">(+18%)</p>
            </div>
            <small class="mb-0">Last week analytics</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-danger rounded">
              <div class="ri-user-add-line ri-26px scaleX-n1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Active Users</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">19,860</h4>
              <p class="text-danger mb-1">(-14%)</p>
            </div>
            <small class="mb-0">Last week analytics</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-success rounded">
              <div class="ri-user-follow-line ri-26px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Pending Users</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">237</h4>
              <p class="text-success mb-1">(+42%)</p>
            </div>
            <small class="mb-0">Last week analytics</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-warning rounded">
              <div class="ri-user-search-line ri-26px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- Users List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h6 class="card-title mb-0">Filters</h6>
    <div class="d-flex justify-content-between align-items-center row pt-4 pb-2 gap-4 gap-md-0 gx-5">
      <div class="col-md-4 user_role"><select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option><option value="Admin">Admin</option><option value="Author">Author</option><option value="Editor">Editor</option><option value="Maintainer">Maintainer</option><option value="Subscriber">Subscriber</option></select></div>
      <div class="col-md-4 user_plan"><select id="UserPlan" class="form-select text-capitalize"><option value=""> Select Plan </option><option value="Basic">Basic</option><option value="Company">Company</option><option value="Enterprise">Enterprise</option><option value="Team">Team</option></select></div>
      <div class="col-md-4 user_status"><select id="FilterTransaction" class="form-select text-capitalize"><option value=""> Select Status </option><option value="Pending" class="text-capitalize">Pending</option><option value="Active" class="text-capitalize">Active</option><option value="Inactive" class="text-capitalize">Inactive</option></select></div>
    </div>
  </div>
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row mx-1"><div class="col-md-2 d-flex align-items-center justify-content-md-start justify-content-center ps-4"><div class="dt-action-buttons mt-4 mt-md-0"><div class="dt-buttons btn-group flex-wrap"><div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle btn-outline-secondary me-4 waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="ri-download-line ri-16px me-1"></i> <span class="d-none d-sm-inline-block">Export</span></span></button></div> </div></div></div><div class="col-md-10"><div class="d-flex align-items-center justify-content-md-end justify-content-center"><div class="me-4"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search User" aria-controls="DataTables_Table_0"></label></div></div><div class="add-new"><button class="btn btn-primary waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="ri-add-line me-0 me-sm-1 d-inline-block d-sm-none"></i><span class="d-none d-sm-inline-block"> Add New User </span></button></div></div></div></div><table class="datatables-users table dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1394px;">
      <thead>
        <tr><th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 272px;" aria-label="User: activate to sort column ascending" aria-sort="descending">User</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 315px;" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 140px;" aria-label="Role: activate to sort column ascending">Role</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 99px;" aria-label="Plan: activate to sort column ascending">Plan</th><th class="sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 99px; display: none;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 145px; display: none;" aria-label="Actions">Actions</th></tr>
      </thead><tbody><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Zsazsa McCleverty</span></a><small>@zmcclevertye</small></div></div></td><td><span>zmcclevertye@soundcloud.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-pie-chart-line ri-22px text-success me-2"></i>Maintainer</span></td><td><span class="text-heading">Enterprise</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Yoko Pottie</span></a><small>@ypottiec</small></div></div></td><td><span>ypottiec@privacy.gov.au</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-user-line ri-22px text-primary me-2"></i>Subscriber</span></td><td><span class="text-heading">Basic</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Wesley Burland</span></a><small>@wburlandj</small></div></div></td><td><span>wburlandj@uiuc.edu</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-edit-box-line ri-22px text-info me-2"></i>Editor</span></td><td><span class="text-heading">Team</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-primary">VK</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Vladamir Koschek</span></a><small>@vkoschek17</small></div></div></td><td><span>vkoschek17@abc.net.au</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-vip-crown-line ri-22px text-warning me-2"></i>Author</span></td><td><span class="text-heading">Team</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-dark">TW</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Tyne Widmore</span></a><small>@twidmore12</small></div></div></td><td><span>twidmore12@bravesites.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-user-line ri-22px text-primary me-2"></i>Subscriber</span></td><td><span class="text-heading">Team</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-success">TB</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Travus Bruntjen</span></a><small>@tbruntjeni</small></div></div></td><td><span>tbruntjeni@sitemeter.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-computer-line ri-22px text-danger me-2"></i>Admin</span></td><td><span class="text-heading">Enterprise</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Stu Delamaine</span></a><small>@sdelamainek</small></div></div></td><td><span>sdelamainek@who.int</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-vip-crown-line ri-22px text-warning me-2"></i>Author</span></td><td><span class="text-heading">Basic</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-success">SO</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Saunder Offner</span></a><small>@soffner19</small></div></div></td><td><span>soffner19@mac.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-pie-chart-line ri-22px text-success me-2"></i>Maintainer</span></td><td><span class="text-heading">Enterprise</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-primary">SM</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Stephen MacGilfoyle</span></a><small>@smacgilfoyley</small></div></div></td><td><span>smacgilfoyley@bigcartel.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-pie-chart-line ri-22px text-success me-2"></i>Maintainer</span></td><td><span class="text-heading">Company</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading text-truncate"><span class="fw-medium">Skip Hebblethwaite</span></a><small>@shebblethwaite10</small></div></div></td><td><span>shebblethwaite10@arizona.edu</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-computer-line ri-22px text-danger me-2"></i>Admin</span></td><td><span class="text-heading">Company</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record" data-bs-toggle="tooltip" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-22px"></i></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect" data-bs-toggle="tooltip" title="Preview"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="dropdown-item"><i class="ri-eye-line me-2"></i><span>View</span></a><a href="javascript:;" class="dropdown-item"><i class="ri-edit-box-line me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a></div></div></td></tr></tbody>
    </table><div class="row mx-1"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div><div style="width: 1%;"></div></div>
  </div>
  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 h-100">
      <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm" onsubmit="return false" novalidate="novalidate">
        <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
          <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe">
          <label for="add-user-fullname">Full Name</label>
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
        <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
          <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail">
          <label for="add-user-email">Email</label>
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
        <div class="form-floating form-floating-outline mb-5">
          <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact">
          <label for="add-user-contact">Contact</label>
        </div>
        <div class="form-floating form-floating-outline mb-5">
          <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" name="companyName">
          <label for="add-user-company">Company</label>
        </div>
        <div class="form-floating form-floating-outline mb-5 form-floating-select2">
          <div class="position-relative"><select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
            <option value="" data-select2-id="2">Select</option>
            <option value="Australia">Australia</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Belarus">Belarus</option>
            <option value="Brazil">Brazil</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Japan">Japan</option>
            <option value="Korea">Korea, Republic of</option>
            <option value="Mexico">Mexico</option>
            <option value="Philippines">Philippines</option>
            <option value="Russia">Russian Federation</option>
            <option value="South Africa">South Africa</option>
            <option value="Thailand">Thailand</option>
            <option value="Turkey">Turkey</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 360px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select Country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <label for="country">Country</label>
        </div>
        <div class="form-floating form-floating-outline mb-5">
          <select id="user-role" class="form-select">
            <option value="subscriber">Subscriber</option>
            <option value="editor">Editor</option>
            <option value="maintainer">Maintainer</option>
            <option value="author">Author</option>
            <option value="admin">Admin</option>
          </select>
          <label for="user-role">User Role</label>
        </div>
        <div class="form-floating form-floating-outline mb-5">
          <select id="user-plan" class="form-select">
            <option value="basic">Basic</option>
            <option value="enterprise">Enterprise</option>
            <option value="company">Company</option>
            <option value="team">Team</option>
          </select>
          <label for="user-plan">Select Plan</label>
        </div>
        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Submit</button>
        <button type="reset" class="btn btn-outline-danger waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
      <input type="hidden"></form>
    </div>
  </div>
</div>
</div>
<!-- / Content -->
@endsection