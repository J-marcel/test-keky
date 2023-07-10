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

<link rel="stylesheet" href="{{asset('plugins/datatables/datatables.min.css')}}">

<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="main-wrapper">

    @include('sidebar');

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Data Tables</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Shipping</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">

<div class="card-body">
<div class="table-responsive">
<table class="datatable table table-stripped">
<thead>
<tr>
<th>id</th>
<th>Nom</th>
<th>Transporteur</th>
<th>Poids minimal</th>
<th>Poids maximal</th>
<th>Point de service d'entrée</th>

</tr>
</thead>
<tbody>
    @if($message)
    <tr>
        <td colspan="3"><h1>{{ $message }}</h1></td>
    </tr>
@else
    @foreach ($shippings as $shipping)
<tr>
<td>{{ $shipping['id'] }}</td>
<td>{{ $shipping['name'] }}</td>
<td>{{ $shipping['carrier'] }}</td>
<td>{{ $shipping['min_weight'] }}</td>
<td>{{ $shipping['max_weight'] }}</td>
<td>{{ $shipping['service_point_input'] }}</td>

@endforeach
@endif



</tbody>
</table>
<div style="margin-bottom: 5%; margin-top: 3%;!important">
    {{ $shippings->links() }}
</div>
</div>
</div>
</div>
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





{{-- @foreach ($parcels as $parcel)
    <!-- Afficher les détails du colis ici -->
    <p>{{ $parcel['id'] }}</p>
    <p>{{ $parcel['name'] }}</p>
    <!-- Autres informations du colis -->
@endforeach

<!-- Afficher les liens de pagination -->
{{ $parcels->links() }} --}}
