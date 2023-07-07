
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa-solid fa-envelope text-light me-2"></small>
                    <small>info@oph.p4.gov.np </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone text-light me-2"></small>
                    <small>+९७७ ६१ ४६७५५५</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="https://oph.gandaki.gov.np/site/img/loog.png"
                alt="नेपाल सरकार,प्रदेश प्रमुखकाे कार्यालय" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('p_index') }}" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                    <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Province Chief</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ route('p_chief_details') }}" class="dropdown-item">About Chief of Province</a>
                        <a href="{{ route('p_chief_message') }}" class="dropdown-item">Message from Chief</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('p_all_news_events') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News & Events</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        @php
                            $news_cats = App\Models\NewsCategory::all();
                        @endphp
                        @foreach ($news_cats as $item)
                            <a class="dropdown-item" href="{{ route('p_show_news_by_cat', $item->id) }}">{{ $item->category }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Office</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ route('organization_structure') }}" class="dropdown-item">Organization Structure</a>
                        <a href="{{ route('p_employee_details') }}" class="dropdown-item">Employee Details</a>
                    </div>
                </div>
                <a href="{{ route('p_reports') }}" class="nav-item nav-link">Report</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="{{ route('p_gallery') }}" class="nav-item nav-link">Photo Gallery</a>
            </div>
            <img src="https://oph.gandaki.gov.np/site/img/flag.gif" width="40">
        </div>
    </nav>
    <!-- Navbar End -->