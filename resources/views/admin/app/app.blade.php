<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/logo/Transparan.png') }}" type="image/x-icon">
    
    @stack('top-style')
    @include('admin.layouts.includes.style')
    @stack('bottom-style')
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    

    @yield('content-admin')

    @include('admin.layouts.footer')

    @stack('top-script')
    @include('admin.layouts.includes.script')
    @stack('bottom-script')
</body>

</html>
