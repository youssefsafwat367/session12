<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="./index.html">VCare</a>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('Admin_Home_page') }}">DashBoard</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('Home_Page') }}">Home</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('Majors_Page') }}">majors</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{ route('Doctors_Page') }}">Doctors</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('Login_Page') }}">login</a>
            </div>
        </div>
    </div>
</nav>
