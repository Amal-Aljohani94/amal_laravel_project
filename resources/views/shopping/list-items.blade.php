@extends('layouts.app')

@section('content')


<div class="containter">
    <div class="row">
        <div class="col">
            @foreach($data as $items)
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <img src="/assets\images\{{$items->images}}" style="border-radius: 15px;" width="300" height="280">
                        
                        
                        </div>
                        <div class="col-sm-6">
                           
                        <h4 class="alert alert-success">{{$items->productname}}</h4>
                        <ul class="list-ustyled">
                            <li class="text-dark badge bg-danger p-2" style="font-size:medium;">{{$items->description}}</li>
                            <li class="text-dark p-2">{{$items->color}}</li>
                            <li class="text-dark p-2"><small class="text-dark">Address: Jeddah Khaled Ibn Alwaleed Street</small></li>
                        </ul>
                            </div>
                            <div class="col-sm-3">
                            <ul class="list-ustyled p-2 text-center">
                            <li class="text-dark badge bg-success mt-1" style="font-size:medium;">Price:{{$items->price}}SAR </li>
                            <li class="mt-3"><span class="text-dark">Tax: {{$items->tax}}SAR</span></li>
                            <li class="mt-1"><small class="text-dark">Total:{{$items->total}}SAR</small></li>
                            <li class="mt-1"><small class="text-dark">Descount:<del class="text-danger">{{$items->descount}}SAR</del></small></li>
                            <li class="mt-1"><small class="text-dark">Net:{{$items->net}}SAR</small></li>
                        </ul>

                        <div class="row">
                            <div class="col text-center">
                            <a href="{{route('show-items-details',['id'=>$items->id])}}" class="btn btn-primary">Show Details >></a>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
