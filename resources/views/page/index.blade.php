@extends('mylayout.app')

@section('content')
<!-- start of Main Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Page</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Sub Page</h6>
    </div>
    <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      <a href="#" class="btn btn-success mb-2">Add</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>no</th>
              <th>th 1</th>
              <th>th 2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>a</td>
              <td>b</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End of Main Content -->
@endsection