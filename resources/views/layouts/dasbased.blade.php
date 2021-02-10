<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Recruiter||Dashboard</title>
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}} " sizes="14x16">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
<!-- top nav section start -->
<div class="container">
    <div class="talent-tracker__top-nav-section">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a class="talent-tracker__logo" href=""> <img src="assets/images/talent-tracker-logo.webp" alt="talent-tracker-logo" style="width:auto" loading="lazy"> </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="{{route('logout')}}">
                    <button class="talent-tracker__logout--btn talent-tracker--btn">  Logout</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- top nav section end -->

<div class="container">

    @yield('dash-main')


</div>

<!-- footer area start -->
<div class="container">
    <footer class="talent-tracker__footer-area">
        <p class="talent-tracker__footer-text">All Right Reserved &copy; TalentTracker</p>
    </footer>
</div>
<!-- footer area end -->
</body>
</html>