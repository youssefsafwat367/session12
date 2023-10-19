<!DOCTYPE html>
<html lang="en">
@extends('layout.front.header')
@section('title', 'Doctors')
<body>
    <div class="page-wrapper">
        @include('layout.front.navbar')
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Home_Page') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">doctors</li>
                </ol>
            </nav>
            <div class="doctors-grid">
                <div class="card p-2" style="width: 18rem;">

                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('assets') }}/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{ route('Booking_Page') }}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>


            </div>
            <nav class="mt-5" aria-label="navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link page-prev" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                < </span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link page-next" href="#" aria-label="Next">
                            <span aria-hidden="true"> > </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @include('layout.front.footer')
</body>

</html>
