<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>E-come | Multi-Purpose HTML Template for Electronics Store</title>
    @include('client.compoments.css_base')
    @stack('stack-css')
</head>

<body>
    <!-- push menu-->
    {{-- @include('client.includes.push_menu') --}}
    <!-- end push menu-->
    <div class="wrappage">
        @include('client.includes.header')
        <!-- /header -->
        <!-- Slide -->
        @yield('content')
        @include('client.includes.e-category')
        @yield('after-e-category')
        <!-- / end content -->
        @include('client.includes.footer')
        <!-- /footer -->
        <!-- /footer -->
    </div>
    @include('client.compoments.scripts_base')
    @stack('stack-scripts')
</body>

</html>