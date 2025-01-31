@include('fixed.head')
<body>
@include('fixed.nav')

@yield('content')

@include('fixed.footer')
@yield('script')

<script src="https://kit.fontawesome.com/231b95a13a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="{{asset('assets/js/main/main.js')}}"></script>
</body>
</html>
