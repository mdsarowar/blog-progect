<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Biztrox @yield('title')</title>
    @include('admin.includes.css')
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @if(Auth::check())
       @include('admin.includes.header')
        <!-- ========== Left Sidebar Start ========== -->
       @include('admin.includes.menu')
   @endif
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="{{Auth::check()? 'main-content': ''}}">

        <div class="{{Auth::check()? 'page-content':''}}">
            @yield('body')

            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->


         <!-- end modal -->

        @include('admin.includes.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
{{--<div class="right-bar">--}}
{{--    <div data-simplebar class="h-100">--}}
{{--        <div class="rightbar-title px-3 py-4">--}}
{{--            <a href="javascript:void(0);" class="right-bar-toggle float-right">--}}
{{--                <i class="mdi mdi-close noti-icon"></i>--}}
{{--            </a>--}}
{{--            <h5 class="m-0">Settings</h5>--}}
{{--        </div>--}}

{{--        <!-- Settings -->--}}
{{--        <hr class="mt-0" />--}}
{{--        <h6 class="text-center mb-0">Choose Layouts</h6>--}}

{{--        <div class="p-4">--}}
{{--            <div class="mb-2">--}}
{{--                <img src="{{asset('/')}}admin/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">--}}
{{--            </div>--}}
{{--            <div class="custom-control custom-switch mb-3">--}}
{{--                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />--}}
{{--                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <img src="{{asset('/')}}admin/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">--}}
{{--            </div>--}}
{{--            <div class="custom-control custom-switch mb-3">--}}
{{--                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />--}}
{{--                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <img src="{{asset('/')}}admin/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">--}}
{{--            </div>--}}
{{--            <div class="custom-control custom-switch mb-5">--}}
{{--                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />--}}
{{--                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>--}}
{{--            </div>--}}


{{--        </div>--}}

{{--    </div> <!-- end slimscroll-menu-->--}}
{{--</div>--}}
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
@include('admin.includes.js')
</body>

</html>
