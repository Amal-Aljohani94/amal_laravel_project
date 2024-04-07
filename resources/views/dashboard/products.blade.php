@extends('layouts.base')

@section('content')

<div class="container">
  <!-- Display validation errors outside of the modal -->
  @error('productname')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror


<div class="row mt-5">
    <div class="col">

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add new product
</button>


<div class=" mt-3">
<div class="col">

<form action="{{route('products')}}" method="post">
  @csrf
<input type="text" name="name" class="form-control" style="background-color: white";>
<button class="btn btn-primary mt-3" type="submit">Search </button>
</form>


        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Add new product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('createproducts')}}" method="post">
    @csrf 


    <input type="text" id="productname" class="form-control @error('productname') is-invalid @enderror" name="productname">

        @error('productname')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        
        @enderror
       
    <button type="submit" name="save" class="btn btn-info mt-2">Save</button>
   
    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">Cancel</button>
    </form> 
      </div>
 
    </div>
  </div>
</div>
</div>
</div>


<div class="row mt-5 text-dark">
<div class="col">
    <div class="card">
        <div class="card-body bg-white">
        @if(Route::is('search') )
          
          <form action="{{route('redirect')}}" method="get">
  
          <div class="col d-flex justify-content-end align-items-end">
          <button class="btn btn-secondary mt-3" type="submit">Cancel search </button> </div>
</form>
</div>

@endif
            <table class="table table-bordered">
<thead  class="text-center">
    <th>ID</th>
    <th>Product name</th>
    <th colspan="2">Actions</th>
</thead>
<tbody class="text-center">
    @foreach($products as $items)
    <tr>
        <td>{{$items->id}}</td>
        <td>{{$items->productname}}</td>
        <td><a href="{{route('del', ['id'=>$items['id']])}} "><i class="fa fa-trash txt-danger" style="color:red;"  aria-hidden="true"></i></a></td>
        <td><a href="{{route('edit', ['id'=>$items['id']])}}"><i class="fa fa-edit txt-success" style="color:green;" aria-hidden="true"></i></a></td>
    </tr>
    @endforeach
</tbody>
            </table>

        </div>


    </div>
</div>

</div>
</div>


  



@endsection
