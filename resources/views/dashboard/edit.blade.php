@extends('layouts.base')
@section('content')

<div class="container">

<div class="card mt-5">

<div class="card-body bg-white">

<form action="{{route('update-product', $products->id)}}" method="post">
@csrf
<div class="row mt-3 text-center">
<input type="hidden" name="id" value="{{$products['id']}}">


<div class="col">
<label for="prname"> اسم المنتج </label>
<input type="text" name="productname" class="form-control p-1" id="prname" value="{{$products['productname']}}">
</div>
</div>

<div class="row mt-3">
<div class="col text-center">
<button class=" btn btn-success" type="submit">Save</button>
</div>

</div>
</form>

</div>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    let collapseElements = document.querySelectorAll('.collapse');
    collapseElements.forEach(function(collapseElement) {
      collapseElement.addEventListener('show.bs.collapse', function() {
        collapseElements.forEach(function(otherCollapseElement) {
          if (otherCollapseElement !== collapseElement && otherCollapseElement.classList.contains('show')) {
            otherCollapseElement.classList.remove('show');
          }
        });
      });
    });
  });
</script>

@endsection

