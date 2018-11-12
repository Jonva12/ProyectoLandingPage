<!DOCTYPE html>

<html>
<head>
    @include('includes.head')
    <title>Landing page WCSearch</title>
   
</head>

<body class="no-page-top">

    <!--Header-->
    @include('includes.navbar')
    <!--Set your own background color to the header-->
    
    <!--End Header-->

    @yield('content')

    <!--Footer-Wrap-->
    @include('includes.footer')
    <!--End Footer-Wrap-->
    </div>

    <!--// BACK TO TOP //-->
    <div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>

    <!-- Libs -->
    @include('includes.scripts')
</body>
</html>