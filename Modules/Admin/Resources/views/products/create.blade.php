@extends('admin::layouts.master')

@section('title', 'Add Product')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- add category -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add product</h3>
                        </div>
                        <form action=" {{ route('products.store') }} " method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body card-block">
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="name" class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="name" name="name"
                                               placeholder="Name category" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="description" class="form-control-label">Description</label>
                                    </div>
                                    <div class="col-md-5">
                                        <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="price" class="form-control-label">Price</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="number" id="price" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="image" class="form-control-label">Image</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="file" id="image" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="select2Multiple">Multiple Tags</label>
                                    <select class="select2-multiple form-control" name="categories[]" multiple="multiple"
                                      id="select2Multiple">
                                      <option value="1">tag1</option>
                                      <option value="2">tag2</option>
                                      <option value="3">tag3</option>               
                                    </select>
                                  </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- END add category -->
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
<script>
  $(document).ready(function() {
      // Select2 Multiple
      $('.select2-multiple').select2({
          placeholder: "Select",
          allowClear: true
      });

  });

</script>
@endsection
