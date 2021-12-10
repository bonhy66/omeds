@extends('admin.master')


@section('contents')
<form action="{{route('admin.product.post')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Product Image</label>
            <input name="image" type="file" class="form-control" id="validationCustom01" placeholder="Product image">
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name</label>
            <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="Product name">
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                    <option>select one</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>

    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Company</label>
                <select name="comapny" class="form-control" id="exampleFormControlSelect1">
                    <option>select one</option>
                    @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>



        <div class="col-md-3 mb-3">
            <label for="validationCustom04">Quentity</label>
            <input name="quentity" type="text" class="form-control" id="validationCustom04" placeholder="Quentity">
        </div>

        <div class="col-md-3 mb-3">
            <label for="validationCustom05">Price</label>
            <input name="price" type="text" class="form-control" id="validationCustom05" placeholder="Price">
        </div>

    </div>
    <!--<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div> -->

    <button class="btn btn-primary" type="submit">Submit form</button>

</form>

<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> -->

@endsection
