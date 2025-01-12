
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
            
            <!-- Permission Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row mx-1"><div class="col-sm-12 col-md-3 mb-n5"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-9"><div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"><div class="me-4"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search Permissions" aria-controls="DataTables_Table_0"></label></div></div><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-primary mb-5 mb-md-0 waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#addPermissionModal"><span><i class="ri-add-line me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add Permission</span></span></button> </div></div></div></div><table class="datatables-permissions table dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 897px;">
      <thead>
        <tr><th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 8px;" aria-label=""></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 198px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 324px;" aria-label="Assigned To">Assigned To</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 201px;" aria-label="Created Date">Created Date</th><th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Actions">Actions</th></tr>
      </thead><tbody><tr class="odd"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Management</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a></span></td><td><span class="text-nowrap">14 Apr 2021, 8:43 PM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Manage Billing &amp; Roles</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a></span></td><td><span class="text-nowrap">16 Sep 2021, 5:20 PM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Add &amp; Remove Users</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-warning me-4">Manager</span></a></span></td><td><span class="text-nowrap">14 Oct 2021, 10:20 AM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Project Planning</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-success me-4">Users</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-info me-4">Support</span></a></span></td><td><span class="text-nowrap">14 May 2021, 12:10 PM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Manage Email Sequences</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-success me-4">Users</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-info me-4">Support</span></a></span></td><td><span class="text-nowrap">23 Aug 2021, 2:00 PM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Client Communication</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-warning me-4">Manager</span></a></span></td><td><span class="text-nowrap">15 Apr 2021, 11:30 AM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Only View</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-danger me-4">Restricted User</span></a></span></td><td><span class="text-nowrap">04 Dec 2021, 8:15 PM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Financial Management</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-warning me-4">Manager</span></a></span></td><td><span class="text-nowrap">25 Feb 2021, 10:30 AM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td><span class="text-nowrap text-heading">Manage Others’ Tasks</span></td><td><span class="text-nowrap"><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-primary me-4">Administrator</span></a><a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"><span class="badge rounded-pill bg-label-info me-4">Support</span></a></span></td><td><span class="text-nowrap">04 Nov 2021, 11:45 AM</span></td><td class="dtr-hidden" style="display: none;"><div class="d-flex align-items-center"><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill delete-record text-body waves-effect waves-light me-1"><i class="ri-delete-bin-7-line ri-22px"></i></button><span class="text-nowrap"><button class="btn btn-sm btn-icon btn-text-secondary text-body rounded-pill waves-effect waves-light" data-bs-target="#editPermissionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="ri-edit-box-line ri-22px"></i></button></span></div></td></tr></tbody>
    </table><div class="row mx-1"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a></li></ul></div></div></div></div>
  </div>
</div>
<!--/ Permission Table -->

<!-- Modal -->
<!-- Add Permission Modal -->
<div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Add New Permission</h4>
          <p>Permissions you may use and assign to your users.</p>
        </div>
        <form id="addPermissionForm" class="row fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 mb-4 fv-plugins-icon-container">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalPermissionName" name="modalPermissionName" class="form-control" placeholder="Permission Name" autofocus="">
              <label for="modalPermissionName">Permission Name</label>
            </div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12 mb-2">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="corePermission">
              <label class="form-check-label" for="corePermission">
                Set as core permission
              </label>
            </div>
          </div>
          <div class="col-12 text-center demo-vertical-spacing">
            <button type="submit" class="btn btn-primary me-3 waves-effect waves-light">Create Permission</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Discard</button>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Add Permission Modal -->
<!-- Edit Permission Modal -->
<div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-simple modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit Permission</h4>
          <p>Edit permission as per your requirements.</p>
        </div>
        <div class="alert alert-warning d-flex align-items-start" role="alert">
          <span class="alert-icon me-4 rounded-2"><i class="ri-alert-line ri-22px"></i></span>
          <span>
            <h5 class="alert-heading mb-1">Warning</h5>
            <p class="mb-0">By editing the permission name, you might break the system permissions functionality. Please ensure you're absolutely certain before proceeding.</p>
          </span>
        </div>
        <form id="editPermissionForm" class="row pt-2 gx-4 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-sm-9 mb-4 fv-plugins-icon-container">
            <input type="text" id="editPermissionName" name="editPermissionName" class="form-control form-control-sm" placeholder="Permission Name" tabindex="-1">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-3 mb-4">
            <button type="submit" class="btn btn-primary mt-1 mt-sm-0 waves-effect waves-light">Update</button>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="editCorePermission">
              <label class="form-check-label" for="editCorePermission">
                Set as core permission
              </label>
            </div>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit Permission Modal -->
<!-- /Modal -->
          </div>
        </div>
@endsection