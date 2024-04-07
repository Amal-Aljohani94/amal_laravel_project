<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Admin-Panel - لوحة القيادة</title>
    <style>
        *{
            font-family: cairo;
            color:black;
            
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

     main #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  top: 90px;
  min-width: 100%;
  min-height: 100%;
}



      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }}


.navbar {
    background: rgb(209,209,209);
background: linear-gradient(0deg, rgba(209,209,209,0.047298142889968475) 0%, rgba(205,205,205,0) 0%, rgba(12,6,66,0.29099562188156514) 99%, rgba(36,21,84,0.7251692913493523) 100%, rgba(24,16,88,0.7923961821056548) 100%);
}


    </style>

        
  
</head>
<body dir="{{(session()->get('locale')=='ar' ? 'rtl' : 'ltr')}}" >
    <Header>

          <!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-light text-white " style="background-color:darkblue ;"> -->

<nav class="navbar navbar-expand-lg navbar-light" > 
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">
          <img
            src="\assets/images/store2.png"
            height="80"
            width="100"
            alt="Amal store"
            loading="lazy" >
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
             <a class="nav-link  text-dark" href="{{route('index')}}">{{__('message.Dashboard')}}</a> 
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark" href="#">Team</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
        
<li class="nav-item dropdown p-3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">اللغة</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-center" href="{{url('language/ar')}}">العربية   <img src="/assets\images\arabic.png" class="rounded-circle" width="30" height="30"  alt="">  </a></li>
            <li><a class="dropdown-item text-center" href="{{url('language/en')}}">English <img src="/assets\images\en.png" class="rounded-circle" width="30" height="30"  alt=""> </a></li>
            
          </ul>
        </li>
  
        <!-- Notifications -->
        <div class="dropdown">
          <a
            data-mdb-dropdown-init
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">{{Session::get('count')}}</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <div class="dropdown">
          <a
            data-mdb-dropdown-init
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            aria-expanded="false"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
              class="rounded-circle"
              height="25"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
    </Header>

    <main>
    
          
                @yield('content')

    </main>

</html>