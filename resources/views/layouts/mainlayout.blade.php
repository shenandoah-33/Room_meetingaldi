<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Fonts google poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Meeting Room</title>
  </head>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-danger">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Meeting Room</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>

          <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">
                  @if (Auth::user())              
                        @if (Auth::user()->role_id == 1)
                            <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                            <a href="/users" @if(request()->route()->uri == 'users') class='active' @endif>Users</a>
                            <a href="/rooms" @if(request()->route()->uri == 'rooms' || 
                              request()->route()->uri == 'room-add' || 
                              request()->route()->uri == 'room-delete/{slug}' || 
                              request()->route()->uri == 'room-edit/{slug}' || 
                              request()->route()->uri == 'room-deleted') class='active' @endif>Rooms</a>
                            <a href="/categories" @if(request()->route()->uri == 'categories' || 
                              request()->route()->uri == 'category-add' || 
                              request()->route()->uri == 'category-delete/{slug}' || 
                              request()->route()->uri == 'category-edit/{slug}' || 
                              request()->route()->uri == 'category-deleted') class='active' @endif>Categories</a>
                            <a href="/room-list" @if(request()->route()->uri == 'room-list') class='active' @endif>Room List</a>
                            <a href="/booking" @if(request()->route()->uri == 'booking') class='active' @endif>Booking</a>
                            <a href="/room-booking" @if(request()->route()->uri == 'room-booking') class='active' @endif>Room Booking</a>
                            <a href="/room-return" @if(request()->route()->uri == 'room-return') class='active' @endif>Room Return</a>
                            <a href="/logout">Logout</a>
                        @else
                            <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif>Profile</a>
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