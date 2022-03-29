<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('/')}}front/images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown active">
                        <a class="nav-link " href="{{url('/')}}" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            Home
                        </a>
{{--                        <div class="dropdown-menu" >--}}
{{--                            <a class="dropdown-item" href="index.html">Home Page 1</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">Home Page</a>--}}
{{--                            <a class="dropdown-item" href="homepage-3.html">Home Page 3</a>--}}
{{--                        </div>--}}
                    </li>
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                           aria-expanded="false">--}}
{{--                            About Us--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" >--}}
{{--                            <a class="dropdown-item" href="about.html">About page</a>--}}
{{--                            <a class="dropdown-item" href="about-2.html">About page-2</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"  aria-haspopup="true"
                           aria-expanded="false">
                            Blog Category
                        </a>
                        <div class="dropdown-menu" >
                            @foreach($blogCategories as $blogcategory)
                            <a class="dropdown-item" href="">{{$blogcategory->category_name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('all_service')}}" role="button"  aria-haspopup="true"
                           aria-expanded="false">
                            Service
                        </a>
{{--                        <div class="dropdown-menu" >--}}
{{--                            <a class="dropdown-item" href="service.html">Service page</a>--}}
{{--                            <a class="dropdown-item" href="service-2.html">Service page-2</a>--}}
{{--                            <a class="dropdown-item" href="service-single.html">Service Single</a>--}}
{{--                        </div>--}}
                    </li>
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                           aria-expanded="false">--}}
{{--                            Pages--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" >--}}
{{--                            <a class="dropdown-item" href="team.html">Team Page</a>--}}
{{--                            <a class="dropdown-item" href="pricing.html">Pricing Page</a>--}}
{{--                            <a class="dropdown-item" href="project.html">project Page</a>--}}
{{--                            <a class="dropdown-item" href="faqs.html">FAQs Page</a>--}}
{{--                            <a class="dropdown-item" href="project-single.html">Project Single</a>--}}
{{--                            <a class="dropdown-item" href="team-single.html">Team Single</a>--}}
{{--                            <a class="dropdown-item" href="404.html">404 Page</a>--}}
{{--                            <a class="dropdown-item" href="signup.html">Sign Up Page</a>--}}
{{--                            <a class="dropdown-item" href="login.html">Login Page</a>--}}
{{--                            <a class="dropdown-item" href="comming-soon.html">Comming Soon Page</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Blog
                        </a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item" href="{{route('blog_page')}}">Blog Page</a>
{{--                            <a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a>--}}
{{--                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>--}}
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact_view')}}">Contact</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('login')}}">login</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('registration')}}">Register</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </nav>
    </div>
</div>
