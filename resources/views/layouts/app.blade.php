<!DOCTYPE html>
<html>
<head>
<link href="{{ mix('css/app.css') }}" rel="stylesheet">

<script src="{{ mix('js/app.js') }}"></script>

    <title>@yield('title', 'My Laravel App')</title>
 
</head>
<body>
    <!-- Header Section -->
    <header>
        @include('partials.header')
    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>