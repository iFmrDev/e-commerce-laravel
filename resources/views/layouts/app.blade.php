<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://fonts.bunny.net/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        *{
            direction: rtl;
            font-family: 'Cairo';
        }
        main{
            min-height: 550px;
        }
        .nav-link:hover{
            color: #2d2d2f !important;
        }
        .fa-shopping-cart:after{
            content:attr(value);
            font-size:10px;
            color:white;
            background: red;
            border-radius:50%;
            padding:3px;
            position:relative;
            left:1px;
            top:-3px;
            opacity:0.9;
        }
        /* .color-green{
            color: #079b60;
        } */
    </style>
</head>
<body>
    @php
        // dd(auth()->user()->id);
    @endphp
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars text-success"></i>
                </button>
                <a class="navbar-brand" href="{{ route('products') }}">
                    <i class="fa-sharp fa-solid fa-bag-shopping fs-1 text-danger shadow"></i>
                </a>
            
                <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mb-2 mb-lg-0" >                    
                        <li class="nav-item">
                            <a class="nav-link  text-success" href="{{ route('products') }}"><i class="fas fa-home text-success"></i> الرئيسية</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link  text-success" href="#" data-bs-toggle="modal" {{ $cartCount > 0 ? 'data-bs-target=#cartModal' : '' }}> <i class="fas fa-shopping-cart text-success" value="{{ $cartCount }}"></i> سلة المشتريات</a>                        
                            </li> 
                        @else
                            <li class="nav-item">
                                <a class="nav-link  text-success" href="{{ route('login') }}" > <i class="fas fa-sign-in text-success" ></i>تسجيل الدخول</a>                        
                            </li>                            
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link  text-success" href="{{route('about')}}"><i class="fa-solid fa-address-card text-success"></i> حول</a>
                        </li>
                        
                    </ul>
                
                </div>
                @auth                    
                    <div class="d-flex align-items-center">
                        <a class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">                   
                            <i class="fa-solid fa-circle-user text-success fs-3"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-end" href="#"><i class="fas fa-user text-success px-2"></i>  الحساب</a></li>                    
                            <li><a class="dropdown-item text-end" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-right-from-bracket text-success px-2"></i>تسجيل الخروج</a></li>
                        </ul>   
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                         
                    </div>
                @endauth
            
            </div>
            
        </nav>
        
    </header>

    <main>
        @yield('content')
        @include('cart_modal')
        @include('sweetalert::alert')
    </main>

    <footer class="text-center bg-white shadow-sm">
        <!-- Grid container -->
        <div class="container pt-2">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-success m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-success m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
      
      
            <!-- youtube -->
            <a
              class="btn btn-link btn-floating btn-lg text-success m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-youtube"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-success m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center py-2 text-secondary" >          
          <span class="w-100 h6 text-center text-muted bold">Developed by :  <i class="fas fa-envelope text-muted"></i>  ifmr4dev@gmail.com </span>
        </div>
        <!-- Copyright -->
      </footer>
      
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      @yield('script')
      {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

      {{-- <script>
        $(document).ready(function () {
            // alert('dddd')
        });
      </script> --}}
</body>
</html>
