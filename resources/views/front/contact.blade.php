<!DOCTYPE html>
<html lang="en" dir="ltr">
@extends('layout.front.header')
@section('title', 'Contact')

<body>
    <div class="page-wrapper">
        @include('layout.front.navbar')
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Home_Page') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">contact</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">

                <form class="form" method="POST" action="{{ route('contacts.store') }}">
                    @if (session('success') != null)
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @csrf
                    @method('post')
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="subject">subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                            @error('subject')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="message">message</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                            @error('message')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
    </div>

    @include('layout.front.footer')
</body>

</html>
