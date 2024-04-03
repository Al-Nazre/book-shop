@php
    use App\Models\Subject;
    $subjects = Subject::all();
@endphp
<div class="nav-area border-bottom border-light bg-white d-lg-block d-none">
    <div class="container">
        <nav id="main-menu" class="position-relative">
            <ul class="d-flex align-items-center justify-content-center position-ststic list-unstyled mb-0 w-100">
                <li class="position-static" id="home">
                    <a href="{{ route('home') }}">
                        <span>হোম</span>
                    </a>
                    <div class="position-absolute bg-primary rounded-2 rounded-bottom border-top border-primary border-4" id="home-Mega-menu" style="left: 0; right: 0;">
                        <div class="p-4 text-center">
                            <a href=""><p></p></a>
                            
                        </div>
                    </div>
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
                                @foreach ($subjects as $subject)
                                <div class="col-sm-3 col-md-4 col-lg-2">
                                        <a href=""><p>{{ $subject->name }}</p></a>
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
                    <div class="position-absolute bg-primary rounded-2 rounded-bottom border-top border-primary border-4" id="home-Mega-menu" style="left: 0; right: 0;">
                        <div class="p-4 text-center">
                            <a href=""><p></p></a>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <a href="">
                        <span>প্রকাশক</span>
                    </a>
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


