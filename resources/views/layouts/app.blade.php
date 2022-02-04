@extends('layouts.base')

@section('body')

<div class="header-fixed">
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <!-- <a href="../../index.html">
                         <img class="logo" src="../../../assets/images/logo.svg" alt="Logo">
                         <img class="logo-mini" src="../../../assets/images/logo_mini.svg" alt="Logo">
                    </a> -->
            <h5 class="btn btn-xs btn-primary ml-3"><small><strong>P.I.S</strong></small> &nbsp;<i
                    class="mdi mdi-heart-pulse"></i></h5>
            <button class="t-header-toggler t-header-desk-toggler d-none d-lg-block">
                <svg class="logo" viewBox="0 0 200 200">
                    <path class="top" d="
                                   M 40, 80
                                   C 40, 80 120, 80 140, 80
                                   C180, 80 180, 20  90, 80
                                   C 60,100  30,120  30,120
                              "></path>
                    <path class="middle" d="
                                   M 40,100
                                   L140,100
                              "></path>
                    <path class="bottom" d="
                                   M 40,120
                                   C 40,120 120,120 140,120
                                   C180,120 180,180  90,120
                                   C 60,100  30, 80  30, 80
                              "></path>
                </svg>
            </button>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
        <!-- partial:../../partials/_sidebar.html -->
        <div class="sidebar">
            <ul class="navigation-menu">
                <li class="nav-category-divider">MAIN</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#patient-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Patient</span>
                        <i class="mdi mdi-account-card-details link-icon"></i>
                    </a>
                    <ul class="navigation-submenu collapse" id="patient-pages">
                        <li>
                            <a href="{{ route('patient-create') }}">New patient</a>
                        </li>
                        <!-- <li>
                                        <a href="#" target="_blank">Patient Records</a>
                                   </li> -->
                    </ul>
                </li>
                <li>
                    <a href="#consultation-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Consultation</span>
                        <i class="mdi mdi-file-document-box link-icon"></i>
                    </a>
                    <ul class="navigation-submenu collapse" id="consultation-pages">
                        <li>
                            <a href="{{ route('consultation-index') }}">New Consultation</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar_footer">
                <div class="user-account">
                    <a class="user-profile-item" href="#"><i class="mdi mdi-account"></i> Profile</a>
                    <a class="user-profile-item" href="#"><i class="mdi mdi-settings"></i> Account
                        Settings</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary btn-logout" type="submit">Logout</button>
                    </form>
                </div>
                <div class="btn-group admin-access-level">
                    <div class="avatar">
                        <img class="profile-img" src="http://www.placehold.it/50x50" alt="">
                    </div>
                    <div class="user-type-wrapper">
                        <p class="user_name">{{ Auth::user()->firstname }} {{ Auth::user()->middlename }} {{
                            Auth::user()->lastname }}</p>
                        <div class="d-flex align-items-center">
                            <div class="status-indicator small rounded-indicator bg-success"></div>
                            <small class="user_access_level">Admin</small>
                        </div>
                    </div>
                    <i class="arrow mdi mdi-chevron-right"></i>
                </div>
            </div>
        </div>
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="container">
                <div class="page-content-wrapper-inner">
                    <div class="content-viewport">
                        <div class="row">
                            <div class="col-md-12">
                                @yield('content')

                                @isset($slot)
                                {{ $slot }}
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content viewport ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right order-sm-1">
                        <ul class="text-gray">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                        <small class="text-muted d-block">Copyright © 2019 <a href="http://www.uxcandy.co"
                                target="_blank">UXCANDY</a>. All rights reserved</small>
                        <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>
</div>
@endsection