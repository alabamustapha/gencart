<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', "GenCart") }} - @yield('title') </title>


    <link rel="stylesheet" href="/css/admin/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/admin/style.css" />
    <link rel="stylesheet" href="/css/admin.css" />

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.partials.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.partials.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.partials.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="/js/admin/jquery-2.1.1.js" type="text/javascript"></script>
<script src="/js/admin/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>
