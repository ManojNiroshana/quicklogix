@extends('layouts/contentLayoutMaster')

@section('title', 'Manage Supppliers')

@section('vendor-style')
{{-- vendor files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
@endsection
@section('page-style')
{{-- Page css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
@endsection

@section('content')
{{-- Data list view starts --}}
<section id="data-list-view" class="data-list-view-header">

  {{-- DataTable starts --}}
  <div class="table-responsive">
    <table class="table data-list-view">
      <thead>
        <tr>
          <th></th>
          <th>NAME</th>
          <th>CATEGORY</th>
          <th>COUNTRY</th>
          <th>TELEPHONE</th>
          <th>EMAIL</th>
          <th>ADDRESS</th>
          <th>STATUS</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td class="product-name">New Creations</td>
          <td class="product-category">Stationary</td>
          <td class="product-category">Sri Lanka</td>
          <td class="product-category">+9477 0231 288</td>
          <td class="product-category">nlniroshana.net@gmail.com</td>
          <td class="product-category">02, Horana Road , Kesbewa</td>
          <td>
            <div class="chip chip-success">
              <div class="chip-body">
                <div class="chip-text">Active</div>
              </div>
            </div>
          </td>
          <td class="product-action">
            <span class="action-edit"><i class="feather icon-edit"></i></span>
            <span class="action-delete"><i class="feather icon-trash"></i></span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  {{-- DataTable ends --}}

  {{-- add new sidebar starts --}}
  <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
      <form action="data-list-view" method="POST">
        @csrf
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
          <div>
            <h4 class="text-uppercase">Add Supplier</h4>
          </div>
          <div class="hide-data-sidebar">
            <i class="feather icon-x"></i>
          </div>
        </div>
        <div class="data-items pb-3">
          <div class="data-fields px-2 mt-1">
            <div class="row">
              <div class="col-sm-12 data-field-col">
                <label for="data-name">Name</label>
                <input type="text" class="form-control" name="name" id="data-name">
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-category"> Category </label>
                <select class="form-control" name="category" id="data-category">
                  <option>General</option>
                  <option>Service</option>
                  <option>Stationary</option>
                  <option>Goods</option>
                </select>
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-status">Country</label>
                <select class="form-control" id="data-status" name="order_status">
                  <option>Sri Lanka</option>
                </select>
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-price">Telephone</label>
                <input type="text" class="form-control" name="telephone" id="data-price">
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-popularity">Email</label>
                <input type="email" class="form-control" name="popularity" id="data-popularity">
              </div>
              <div class="col-sm-12 data-field-col">
                <label for="data-popularity">Address</label>
                <textarea name="address" class="form-control" id="" cols="30" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
          <div class="add-data-btn">
            <input type="submit" class="btn btn-primary" value="Save">
          </div>
          <div class="cancel-data-btn">
            <input type="reset" class="btn btn-outline-danger" value="Cancel">
          </div>
        </div>
      </form>
    </div>
  </div>
  {{-- add new sidebar ends --}}
</section>
{{-- Data list view end --}}
@endsection
@section('vendor-script')
{{-- vendor js files --}}
<script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.select.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/ui/data-list-view.js')) }}"></script>
@endsection