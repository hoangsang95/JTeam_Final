<!DOCTYPE html>
<html>
    @include('module.head')
    @yield('head')  
<body class="option6">
    <div id="header" class="header">
        @include('module.header')   
        @include('module.navbar')   
    </div>
        @yield('content')
    
        @include('module.footer')   

        @include('module.js_v')   
</body>
</html>