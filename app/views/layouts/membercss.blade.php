<div class="main_wrapper">
@include('includes.head')
@include('includes.nav_memberdash')
@include('includes.nav_css_member')
<div id="page-wrapper">
    <div class="row"  style="margin-top: -3%;">
        <div class="col-lg-12">
            @yield('content')
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@include('includes.footer')
</div>