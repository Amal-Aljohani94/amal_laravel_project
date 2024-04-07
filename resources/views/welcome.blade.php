@extends('layouts.test')
@section('content')

<body>

    <div class="container">
    <video autoplay muted loop id="myVideo">
  <source src="\assets/videos/bgvideo.mp4" type="video/mp4">
</video>
        <div class="row text-center d-flex justify-content-center mt-5">
             <div class="col-sm-3">
              <a href="{{route('show-items-phone')}}" style="text-decoration:none;">
                <div class="card">
                    <div class="card-body" style="background-color: khaki; border-style: groove; ">
                        <i class="bi bi-phone-fill text-center" style="font-size: 60px;"></i>
                            <h6>الهواتف الذكية </h6>
                    </div>
                </div>
              </a>
             </div>
            
         
             <div class="col-sm-3">
                <div class="card">
                    <div class="card-body" style="background-color: rgb(147, 239, 213);">
                        <i class="bi bi-tablet text-center" style="font-size: 60px;"></i>
                            <h6> الأجهزة اللوحية </h6>
                    </div>
                </div>
             </div>
             
        </div>

        <div class="row text-center d-flex justify-content-center mt-5">
            <div class="col-sm-3">
               <div class="card">
                   <div class="card-body" style="background-color: rgb(218, 141, 208);">
                       <i class="bi bi-earbuds text-center" style="font-size: 60px;"></i>
                           <h6>سماعات الأذن</h6>
                   </div>
               </div>
            </div>

            <div class="col-sm-3">
               <div class="card">
                   <div class="card-body" style="background-color: rgb(165, 187, 230);">
                       <i class="bi bi-device-ssd text-center" style="font-size: 60px;"></i>
                           <h6> بطاقات الذاكرة  </h6>
                   </div>
               </div>
            </div>
            
       </div>
    </div>
</body>

@endsection