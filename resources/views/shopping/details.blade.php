@extends('layouts.app')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <body> 
        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
               
                    <img style="max-width:100%;" src="/assets/images/{{$data->images}}" />
                </div>
                
                <div class="col-xs-5 text-dark" style="border:1px solid gray;  border-radius: 20px 20px;">
                    <!-- Datos del vendedor y titulo del producto -->

                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>Type:{{$data->productname}}</small></h6>                    
                       
                    </div> 
                    <h3>{{$data->description}}</h3>    
                    <h5 style="color:#337ab7">color:{{$data->color}}<a href="#"></a> </small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>price:{{$data->net}} SAR</small></h6>
                    <h3 style="margin-top:0px;"></h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                                            
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus text-dark"></span></div>
                            <input class="text-dark" value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus text-dark"></span></div>
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                    <a href="{{route('add-to-cart',['id'=>$data->id])}}" class="btn btn-primary shadow-0"><i class="me-1 fa fa-shopping-basket"></i> Add to cart</a>
                       
                        <button class="btn btn-success "><span   aria-hidden="true"></span> Buy Now</button>

                    </div>                                        
                </div>                              
        
               
                              
                    </div>





@endsection