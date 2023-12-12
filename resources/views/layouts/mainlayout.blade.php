<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.dashboard.css')}}" />
    <!-- Fonts google poppins-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Meeting Room</title>
  </head>
  <link rel="icon" href="img/logo-kpu.png" type="image/x-icon">

<body>
  <div class="main d-flex flex-column justify-content-between">
    <div class="body-content h-100">
      <div class="row g-0 h-100">
              <div class="sidebar col-lg-2 collapse fw-bold d-lg-block" id="navbarTogglerDemo02">
                <div class="logo fw-bold text-center">
                  <img src="{{asset('img/logo-kpu.png')}}" alt="gambar" width="45px">
                  {{-- <i>Room<span class="danger">Meeting</span></i> --}}
                </div>
                @if (Auth::user())
                      @if (Auth::user()->role_id == 1)
                            <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>
                              <i class="bi bi-speedometer2"></i>
                              <span>Dashboard</span>
                            </a>
                            <a href="/users" @if(request()->route()->uri == 'users') class='active' @endif>
                              <i class="bi bi-people"></i>
                              <span>Users</span>
                            </a>
                            <a href="/rooms" @if(request()->route()->uri == 'rooms' ||
                              request()->route()->uri == 'room-add' ||
                              request()->route()->uri == 'room-delete/{slug}' ||
                              request()->route()->uri == 'room-edit/{slug}' ||
                              request()->route()->uri == 'room-deleted') class='active' @endif>
                              <i class="bi bi-bookmarks"></i>
                              <span>Rooms</span>
                            </a>
                            <a href="/categories" @if(request()->route()->uri == 'categories' ||
                              request()->route()->uri == 'category-add' ||
                              request()->route()->uri == 'category-delete/{slug}' ||
                              request()->route()->uri == 'category-edit/{slug}' ||
                              request()->route()->uri == 'category-deleted') class='active' @endif>
                              <i class="bi bi-door-closed"></i>
                              <span>Categories</span>
                            </a>
                            <a href="/room-list" @if(request()->route()->uri == 'room-list') class='active' @endif>
                              <i class="bi bi-card-list"></i>
                              <span>Room List</span>
                            </a>
                            <a href="/booking" @if(request()->route()->uri == 'booking') class='active' @endif>
                              <i class="bi bi-card-checklist"></i>
                              <span>Booking</span>
                            </a>
                            <a href="/room-return" @if(request()->route()->uri == 'room-return') class='active' @endif>
                              <i class="bi bi-arrow-return-right"></i>
                              <span>Room Return</span>
                            </a>
                            <a href="/logout">
                              <i class="bi bi-box-arrow-left"></i>
                              <span>Logout</span>
                            </a>
                        @else
                            <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif>Profile</a>
                            <a href="/room-list" @if(request()->route()->uri == 'room-list') class='active' @endif>Room List</a>
                            <a href="/room-booking" @if(request()->route()->uri == 'room-booking') class='active' @endif>Room Booking</a>
                            <a href="/logout">Logout</a>
                        @endif
                      @else
                      <a href="/login">Login</a>
                  @endif
                </div>
                <div class="content p-3 col-lg-10">
                    @yield('content')
                </div>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./dist/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
