<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dreamchat - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{asset('css/feathericon.min.css')}}">

<link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">

<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="main-wrapper">
@include('sidebar');
<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-primary">
<i class="fe fe-users"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">Name</a>
<a href="#" class="count"> KONAN Kouadio Jean Marcel</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-warning">
<i class="fe fe-phone"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">PHONE</a>
<a href="#" class="count" style="font-size: 28px;!important">0708220518</a>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-md-12 d-flex">



</div>
</div>
</div>
</div>

</div>


<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
