@php
    use App\Models\Subject;
    use App\Models\Author;
    use App\Models\Publication;
    $subjects = Subject::all();
    $authors = Author::all();
    $publications = Publication::all();
@endphp
<div class="nav-area border-bottom border-light bg-white d-lg-block d-none">
    <div class="container">
        <nav id="main-menu" class="position-relative">
            <ul class="d-flex align-items-center justify-content-center position-ststic list-unstyled mb-0 w-100">
                <li>
                    <a href="{{ route('home') }}">
                        <span>হোম</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>বই</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>জেনারেল বই</span>
                    </a>
                </li>
                <li class="position-static" id="home">
                    <a href="{{ route('category') }}">
                        <span>বিষয়</span>
                    </a>
                    <div class="position-absolute bg-megamenu shadow-sm rounded-2 rounded-bottom border-4" id="home-Mega-menu" style="left: 0; right: 0;">
                        <div class="p-4">
                            <div class="row text-center mb-3">
                                @foreach ($subjects as $item)
                                <div class="col-sm-3 col-md-4 col-lg-2">
                                        <a href="{{ url('/category/'.$item->slug) }}"><p>{{ $item->name }}</p></a>
                                </div>
                                @endforeach

                            </div>
                            <div class="w-100 d-flex justify-content-center">
                                <button class="btn btn-outline-primary border-2 border-primary text-center megamenu-btn"  action= "">See More</button>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="position-static" id="home">
                    <a href="">
                        <span>লেখক</span>
                    </a>
                    <div class="position-absolute bg-megamenu shadow-sm rounded-2 rounded-bottom border-4" id="home-Mega-menu" style="left: 0; right: 0;">
                        <div class="p-4">
                            <div class="row text-center mb-3">
                                @foreach ( $authors as $item)
                                <div class="col-sm-3 col-md-4 col-lg-2">
                                        <a href=""><p>{{ $item->name }}</p></a>
                                </div>
                                @endforeach

                            </div>
                            <div class="w-100 d-flex justify-content-center">
                                <button class="btn btn-outline-primary border-2 border-primary text-center megamenu-btn"  action= "">See More</button>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="position-static" id="home">
                    <a href="">
                        <span>প্রকাশনি</span>
                    </a>
                    <div class="position-absolute bg-megamenu shadow-sm rounded-2 rounded-bottom border-4" id="home-Mega-menu" style="left: 0; right: 0;">
                        <div class="p-4">
                            <div class="row text-center mb-3">
                                @foreach ($publications as $item)
                                <div class="col-sm-3 col-md-4 col-lg-2">
                                        <a href=""><p>{{ $item->name }}</p></a>
                                </div>
                                @endforeach

                            </div>
                            <div class="w-100 d-flex justify-content-center">
                                <button class="btn btn-outline-primary border-2 border-primary text-center megamenu-btn"  action= "">See More</button>
                            </div>
                        </div>
                    </div>
                </li>
               
                
                
                <li>
                    <a href="">
                        <span>প্রি-অর্ডার</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
            <!-- End Nav Area -->


