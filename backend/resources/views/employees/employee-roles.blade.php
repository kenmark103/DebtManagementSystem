
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
            
            <h4 class="mb-1">Roles List</h4>
<p class="mb-6">A role provided access to predefined menus and features so that depending on assigned role an administrator can have access to what user needs.</p>
<!-- Role cards -->
<div class="row g-6">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 4 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
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
              <span class="avatar-initial rounded-circle pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Administrator</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 7 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Jimmy Ressula" data-bs-original-title="Jimmy Ressula">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="John Doe" data-bs-original-title="John Doe">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Kristi Lawker" data-bs-original-title="Kristi Lawker">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Editor</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 5 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Andrew Tye" data-bs-original-title="Andrew Tye">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Rishi Swaat" data-bs-original-title="Rishi Swaat">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Rossie Kim" data-bs-original-title="Rossie Kim">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Users</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 3 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Kim Karlos" data-bs-original-title="Kim Karlos">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/3.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Katy Turner" data-bs-original-title="Katy Turner">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Peter Adward" data-bs-original-title="Peter Adward">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Support</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="mb-0">Total 2 users</p>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Kim Merchent" data-bs-original-title="Kim Merchent">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Sam D'souza" data-bs-original-title="Sam D'souza">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Nurvi Karlos" data-bs-original-title="Nurvi Karlos">
              <img class="rounded-circle" src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png" alt="Avatar">
            </li>
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="role-heading">
            <h5 class="mb-1">Restricted User</h5>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
              <p class="mb-0">Edit Role</p>
            </a>
          </div>
          <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-5">
          <div class="d-flex align-items-end h-100 justify-content-center">
            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/illustration-3.png" class="img-fluid" alt="Image" width="80">
          </div>
        </div>
        <div class="col-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-sm btn-primary mb-4 text-nowrap add-new-role waves-effect waves-light">Add New Role</button>
            <p class="mb-0">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <h4 class="mt-6 mb-1">Total users with their roles</h4>
    <p class="mb-0">Find all of your company’s administrator accounts and their associate roles.</p>
  </div>
  <div class="col-12">
    <!-- Role Table -->
    <div class="card">
      <div class="card-datatable table-responsive datatable-roles">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row mx-1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start gap-4"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start"><div class="dt-buttons btn-group flex-wrap"><div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle btn-outline-secondary me-4 waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="ri-download-line ri-16px me-1"></i> <span class="d-none d-sm-inline-block">Export</span></span></button></div> </div></div></div><div class="col-sm-12 col-md-7"><div class="dt-action-buttons d-flex align-items-center justify-content-md-end justify-content-center flex-column flex-sm-row flex-nowrap"><div class="me-1 me-sm-4 mt-n5 mt-md-0"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search User" aria-controls="DataTables_Table_0"></label></div></div><div class="user_role w-px-200 pb-5 pb-md-0"><select id="UserRole" class="form-select text-capitalize form-select-sm"><option value=""> Select Role </option><option value="Admin" class="text-capitalize">Admin</option><option value="Author" class="text-capitalize">Author</option><option value="Editor" class="text-capitalize">Editor</option><option value="Maintainer" class="text-capitalize">Maintainer</option><option value="Subscriber" class="text-capitalize">Subscriber</option></select></div></div></div></div><table class="datatables-users table dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1394px;">
          <thead>
            <tr><th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 272px;" aria-label="User: activate to sort column ascending" aria-sort="descending">User</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 315px;" aria-label="email: activate to sort column ascending">email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 140px;" aria-label="Role: activate to sort column ascending">Role</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 99px;" aria-label="Plan: activate to sort column ascending">Plan</th><th class="sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 99px; display: none;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 145px; display: none;" aria-label="Actions">Actions</th></tr>
          </thead><tbody><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Zsazsa McCleverty</span></a><small>@zmcclevertye</small></div></div></td><td><span>zmcclevertye@soundcloud.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-pie-chart-line ri-22px text-success me-2"></i>Maintainer</span></td><td><span class="text-heading">Enterprise</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Yoko Pottie</span></a><small>@ypottiec</small></div></div></td><td><span>ypottiec@privacy.gov.au</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-user-line ri-22px text-primary me-2"></i>Subscriber</span></td><td><span class="text-heading">Basic</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Wesley Burland</span></a><small>@wburlandj</small></div></div></td><td><span>wburlandj@uiuc.edu</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-edit-box-line ri-22px text-info me-2"></i>Editor</span></td><td><span class="text-heading">Team</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-danger">VK</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Vladamir Koschek</span></a><small>@vkoschek17</small></div></div></td><td><span>vkoschek17@abc.net.au</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-vip-crown-line ri-22px text-warning me-2"></i>Author</span></td><td><span class="text-heading">Team</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-warning">TW</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Tyne Widmore</span></a><small>@twidmore12</small></div></div></td><td><span>twidmore12@bravesites.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-user-line ri-22px text-primary me-2"></i>Subscriber</span></td><td><span class="text-heading">Team</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-dark">TB</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Travus Bruntjen</span></a><small>@tbruntjeni</small></div></div></td><td><span>tbruntjeni@sitemeter.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-computer-line ri-22px text-danger me-2"></i>Admin</span></td><td><span class="text-heading">Enterprise</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Stu Delamaine</span></a><small>@sdelamainek</small></div></div></td><td><span>sdelamainek@who.int</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-vip-crown-line ri-22px text-warning me-2"></i>Author</span></td><td><span class="text-heading">Basic</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-primary">SO</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Saunder Offner</span></a><small>@soffner19</small></div></div></td><td><span>soffner19@mac.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-pie-chart-line ri-22px text-success me-2"></i>Maintainer</span></td><td><span class="text-heading">Enterprise</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-danger">SM</span></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Stephen MacGilfoyle</span></a><small>@smacgilfoyley</small></div></div></td><td><span>smacgilfoyley@bigcartel.com</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-pie-chart-line ri-22px text-success me-2"></i>Maintainer</span></td><td><span class="text-heading">Company</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-warning" text-capitalized="">Pending</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="text-heading"><span class="fw-medium text-truncate">Skip Hebblethwaite</span></a><small>@shebblethwaite10</small></div></div></td><td><span>shebblethwaite10@arizona.edu</span></td><td><span class="text-truncate d-flex align-items-center text-heading"><i class="ri-computer-line ri-22px text-danger me-2"></i>Admin</span></td><td><span class="text-heading">Company</span></td><td class="dtr-hidden" style="display: none;"><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record waves-effect waves-light"><i class="ri-delete-bin-7-line ri-22px"></i></button><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i class="ri-eye-line ri-22px"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow waves-effect waves-light" data-bs-toggle="dropdown"><i class="ri-more-2-fill ri-22px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div></div></td></tr></tbody>
        </table><div class="row mx-1"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div><div style="width: 1%;"></div></div>
      </div>
    </div>
    <!--/ Role Table -->
  </div>
</div>
<!--/ Role cards -->

<!-- Modal -->
<!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-dialog-centered modal-add-new-role">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="role-title mb-2 pb-0">Add New Role</h4>
          <p>Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id="addRoleForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 mb-3 fv-plugins-icon-container">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalRoleName" name="modalRoleName" class="form-control" placeholder="Enter a role name" tabindex="-1">
              <label for="modalRoleName">Role Name</label>
            </div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12">
            <h5>Role Permissions</h5>
            <!-- Permission table -->
            <div class="table-responsive">
              <table class="table table-flush-spacing">
                <tbody>
                  <tr>
                    <td class="text-nowrap fw-medium">Administrator Access <i class="ri-information-line" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Allows a full access to the system" data-bs-original-title="Allows a full access to the system"></i></td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="selectAll">
                          <label class="form-check-label" for="selectAll">
                            Select All
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">User Management</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="userManagementRead">
                          <label class="form-check-label" for="userManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="userManagementWrite">
                          <label class="form-check-label" for="userManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="userManagementCreate">
                          <label class="form-check-label" for="userManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Content Management</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="contentManagementRead">
                          <label class="form-check-label" for="contentManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="contentManagementWrite">
                          <label class="form-check-label" for="contentManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="contentManagementCreate">
                          <label class="form-check-label" for="contentManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Disputes Management</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="dispManagementRead">
                          <label class="form-check-label" for="dispManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="dispManagementWrite">
                          <label class="form-check-label" for="dispManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="dispManagementCreate">
                          <label class="form-check-label" for="dispManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Database Management</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="dbManagementRead">
                          <label class="form-check-label" for="dbManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="dbManagementWrite">
                          <label class="form-check-label" for="dbManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="dbManagementCreate">
                          <label class="form-check-label" for="dbManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Financial Management</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="finManagementRead">
                          <label class="form-check-label" for="finManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="finManagementWrite">
                          <label class="form-check-label" for="finManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="finManagementCreate">
                          <label class="form-check-label" for="finManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Reporting</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="reportingRead">
                          <label class="form-check-label" for="reportingRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="reportingWrite">
                          <label class="form-check-label" for="reportingWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="reportingCreate">
                          <label class="form-check-label" for="reportingCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">API Control</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="apiRead">
                          <label class="form-check-label" for="apiRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="apiWrite">
                          <label class="form-check-label" for="apiWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="apiCreate">
                          <label class="form-check-label" for="apiCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Repository Management</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="repoRead">
                          <label class="form-check-label" for="repoRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="repoWrite">
                          <label class="form-check-label" for="repoWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="repoCreate">
                          <label class="form-check-label" for="repoCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-medium">Payroll</td>
                    <td>
                      <div class="d-flex justify-content-end">
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="payrollRead">
                          <label class="form-check-label" for="payrollRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-4 me-lg-12">
                          <input class="form-check-input" type="checkbox" id="payrollWrite">
                          <label class="form-check-label" for="payrollWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="payrollCreate">
                          <label class="form-check-label" for="payrollCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3 waves-effect waves-light">Submit</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
<!--/ Add Role Modal -->
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p class="mb-6">Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-5" onsubmit="return false">
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" value="Oliver" placeholder="Oliver">
              <label for="modalEditUserFirstName">First Name</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" value="Queen" placeholder="Queen">
              <label for="modalEditUserLastName">Last Name</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" value="oliver.queen" placeholder="oliver.queen">
              <label for="modalEditUserName">Username</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="oliverqueen@gmail.com" placeholder="oliverqueen@gmail.com">
              <label for="modalEditUserEmail">Email</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                <option value="1" selected="">Active</option>
                <option value="2">Inactive</option>
                <option value="3">Suspended</option>
              </select>
              <label for="modalEditUserStatus">Status</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
              <label for="modalEditTaxID">Tax ID</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" value="+1 609 933 4422" placeholder="+1 609 933 4422">
                <label for="modalEditUserPhone">Phone Number</label>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple="">
                <option value="">Select</option>
                <option value="english" selected="">English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="dutch">Dutch</option>
                <option value="hebrew">Hebrew</option>
                <option value="sanskrit">Sanskrit</option>
                <option value="hindi">Hindi</option>
              </select>
              <label for="modalEditUserLanguage">Language</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India" selected="">India</option>
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
              </select>
              <label for="modalEditUserCountry">Country</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="editBillingAddress">
              <label for="editBillingAddress" class="text-heading">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3 waves-effect waves-light">Submit</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
<!-- / Modal -->

          </div>
         
        </div>