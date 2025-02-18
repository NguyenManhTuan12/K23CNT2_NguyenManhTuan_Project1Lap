<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
      
        .sideBar {
            width: 250px;
            background: #db6c6c;
        }
    
        .wrapper {
            
            width: calc(100% - 250px -2rem);
            background: #ffffff;
        }
    </style>
</head>
<body style="background: #db6c6c">
    <section class ="container-fluid">
        <!-- Sidebar -->
        <nav class="sideBar m-1">
            @include('_layouts.admins._menu')
        </nav>
        <section class ="wrapper m-1">
        <!-- Main Wrapper -->
      
            <!-- Header -->
            <header class="my-1 pi-1">
                @include('_layouts.admins._headerTitle')
            </header>

            <!-- Content Body -->
            <section class="content-body border my-1 pi-1">
                @yield('content-body')
            </section>
        </section>
    </section>
    

    <!-- Scripts -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>