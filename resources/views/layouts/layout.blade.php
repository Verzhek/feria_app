
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    <header class="bg-gray-900 shadow">
        <div class="<max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl text-left font-serif font-bold text-gray-50">Feria Manager</h1>
            <h1 class="text-3xl text-right font-mono font-light text-gray-50">@yield('title')</h1>
        </div>
        </header>
        <nav class="bg-gray-700 shadow min-h-1/5">
            <ul class="list-none flex">
                @if(Auth::check())
                <li class="flex-1">
                    <a href={{url("/dashboard")}} class="text-gray-100
                    hover:text-white px-3 py-2 rounded-md
                    text-sm font-medium">
                     Dashboard
                    </a>
                </li>
                <li class="flex-1">
                    <a href={{url("admin_eyes_only/visits")}} class="text-gray-100
                    hover:text-yellow-700 px-3 py-2 rounded-md
                    text-sm font-medium">Visits
                    </a>
                </li>
                <li class="flex-1">
                    <a href={{url("admin_eyes_only/users")}} class="text-gray-100
                    hover:text-yellow-700 px-3 py-2 rounded-md
                    text-sm font-medium">Users
                    </a>
                </li>
                <li class="flex-1">
                    <a href={{url("admin_eyes_only/stands")}} class="text-gray-100
                    hover:text-yellow-700 px-3 py-2 rounded-md
                    text-sm font-medium">Stands
                    </a>
                </li>
                <li class="flex-1">
                    <a href={{url("/logout")}} class="text-gray-100
                    hover:text-yellow-700 px-3 py-2 rounded-md
                    text-sm font-medium">Logout
                    </a>
                </li>
                @else
                <li>  <a href={{url("/login")}} class="text-gray-100
                    hover:text-yellow-700 px-3 py-2 rounded-md
                    text-sm font-medium">Log In
                    </a>
                </form></li>
                <li>  <a href={{url("/register")}} class="text-gray-100
                    hover:text-yellow-700 px-3 py-2 rounded-md
                    text-sm font-medium">Register
                    </a>
                </form></li>
                @endif
            </ul>

        </nav>
        @yield('content')

    <footer class="min-w-full min-h-1/5 bg-gray-900 flex">
        @yield('footer')
        <img class="flex-1" src="https://creativecommons.org/wp-content/themes/cc/images/cc.logo.white.svg">
        <small class="flex-2 px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">
            Except where otherwise noted, content on this site is licensed under a Creative Commons Attribution 4.0 International license. Icons by The Noun Project.
        </small>
    </footer>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
