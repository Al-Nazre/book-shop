<div class="nav-area border-bottom border-light bg-white d-lg-block d-none">
    <div class="container">
        <nav id="main-menu">
            <ul class="d-flex align-items-center justify-content-center list-unstyled mb-0">
                <li>
                    <a href="./index.html">
                        <span>হোম</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>বই</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>জেনারেল বই</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>বিষয়</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>লেখক</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>প্রকাশক</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>বইমেলা ২০২২</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>প্রি-অর্ডার</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>প্রসাধনী</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>পোশাক</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="./blogs.html">
                        <span>ব্লগ</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>স্টেশনারী</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
            <!-- End Nav Area -->


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>