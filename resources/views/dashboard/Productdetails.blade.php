@extends('layouts.base')

@section('content')


<div class="container">

  <!-- Display validation errors outside of the modal -->
  @error('color')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror
    @error('price')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror
    @error('qty')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror

    @error('description')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror


<div class="row mt-5">
    <div class="col">

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add new product Details
</button>


<div class=" mt-3">
<div class="col">

<form action="{{route('search')}}" method="post">
  @csrf
<input type="text" name="name" class="form-control" style="background-color: white">
<button class="btn btn-primary mt-3" type="submit">Search </button>

</form>
</div>

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
      <form action="{{route('create-details')}}" method="post">
    @csrf 
    <div class="row">
        <div class="col">
        <label for="product"class="text-dark">Select product</label>
        <select class="form-select" id="product" name="productid">
        @foreach($products as $item)
        <option class="text-dark"  value="{{$item->id}}">{{$item->productname}} </option>
         @endforeach
</select>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="color"class="text-dark">color</label>
        
        <input type="text" id="color" class="form-control @error('color') is-invalid @enderror" name="color">
        @error('color')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror

        </div>
        <div class="col">
        <label for="price"class="text-dark">price</label>
        <input type="text" id="price"  class="form-control @error('price') is-invalid @enderror" name="price">
        @error('price')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="qty" class="text-dark">Quantity</label>
        <input type="text" id="qty" class="form-control @error('qty') is-invalid @enderror" name="qty">
        @error('qty')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
        </div>
        <div class="col">
        <label for="description" class="text-dark">Description</label>
        <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description">
        @error('description')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
        </div>
    </div>
        
   <!-- <label for="image" class="text-dark">Product Image</label>

<input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image">
@error('image')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
@enderror -->
    <button type="submit" name="save" class="btn btn-info mt-2">Save</button> 
    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">Cancel</button>
    </form> 

      </div>
 
    </div>
  </div>
</div>
</div>
</div>


<form action="{{route('create-details')}}" method="post">
    @csrf 
    <div class="row">
        <div class="col">
        <label for="product"class="text-dark mt-4">Select product</label>
        <select class="form-select" id="product" name="productid">
        @foreach($products as $item)
        <option class="text-dark"  value="{{$item->id}}">{{$item->productname}} </option>
         @endforeach
</select>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="color"class="text-dark">color</label>
        
        <input type="text" id="color" class="form-control @error('color') is-invalid @enderror" name="color"  name="color" >
        @error('color')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror

        </div>
        <div class="col">
        <label for="price"class="text-dark">price</label>
        <input type="text" id="price"  class="form-control @error('price') is-invalid @enderror" name="price"   name="price">
        @error('price')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="qty" class="text-dark">Quantity</label>
        <input type="text" id="qty" class="form-control @error('qty') is-invalid @enderror" name="qty">
        @error('qty')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
        </div>
        <div class="col">
        <label for="description" class="text-dark">Description</label>
        <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description">
        @error('description')
        <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
        </div>
    </div>
< <label for="image" class="text-dark">Product Image</label>s
<input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image">
@error('image')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
@enderror

    <button type="submit" name="save" class="btn btn-info mt-2">Save</button>
    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">Cancel</button>
    </form> 





<div class="row mt-5 text-dark">
<div class="col">
    <div class="card">
        <div class="card-body bg-white">
            <table class="table table-bordered">
<thead  class="text-center">
    <th>ID</th>
    <th>Product details ID</th>
    <th>Product name</th>
    <th>Color</th>
<th>Price</th>
<th>Quantity</th>
<th>Description</th>
<th colspan="2">Actions</th>
</thead>
<tbody class="text-center">
@foreach($productsdetails as $items)
<tr>
<td>{{$items->productid}}</td>
<td>{{$items->id}}</td>

<td>{{$items->productname}}</td>
<td>{{$items->color}}</td>
<td>{{$items->price}} SAR</td>
<td>{{$items->qty}}</td>
<td>{{$items->description}}</td>
<td><a href="{{route('del', ['id'=>$items->id])}} "><i class="fa fa-trash txt-danger" style="color:red;"  aria-hidden="true"></i></a></td>
        <td><a href="{{route('edit', ['id'=>$items->id])}}"><i class="fa fa-edit txt-success" style="color:green;" aria-hidden="true"></i></a></td>
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
