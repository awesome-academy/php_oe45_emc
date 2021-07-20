@extends('admin.layouts.app')

@section('title')
<title>@lang('lable.title.dashboard.index')</title>
@endsection

@section('css')
<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin-page/vendors/images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin-page/vendors/images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin-page/vendors/images/favicon-16x16.png') }}">
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Google Font -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/fonts/google-font/inter.css') }}">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/vendors/styles/core.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/vendors/styles/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin-page/vendors/styles/style.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <h4 class="mb-30 h4">Orders Today</h4>
            <div id="chart-container" class="chart" style="height: 300px;"></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <h4 class="mb-30 h4">Orders This Week</h4>
            <div id="chart-week" class="chart" style="height: 300px;"></div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <h4 class="mb-30 h4">Orders This Year</h4>
            <div id="chart-year" class="chart" style="height: 300px;"></div>
        </div>
    </div>
</div> 
@endsection

@section('script')
<script src="{{ asset('admin-page/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('admin-page/vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('admin-page/vendors/scripts/process.js') }}"></script>
<script src="{{ asset('admin-page/vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('admin-page/src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
<script src="{{ asset('admin-page/src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
<script src="{{ asset('admin-page/src/plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
<script src="{{ asset('admin-page/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('admin-page/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin-page/vendors/scripts/dashboard2.js') }}"></script>
<!-- Charting library -->
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Your application script -->
<script>
  const chart = new Chartisan({
    el: '#chart-container',
    url: "@chart('statistical_order_chart')",
  });
</script>
<script>
    const chartYear = new Chartisan({
      el: '#chart-year',
      url: "@chart('statistical_order_a_year_chart')",
    });
</script>
<script>
    const chartWeek = new Chartisan({
      el: '#chart-week',
      url: "@chart('statistical_order_a_week_chart')",
    });
</script>
@endsection
