@extends('layout.template')
@section('content')
<div class="header">
    <h1>Modul Piutang</h1>
    <p>Service Oriented Architecture</p>
</div>

<ul>
    <li><a href="{!! url('/'); !!}">Data Penjualan</a></li>
    <li><a href="{!! url('/pembayaran'); !!}">Input Pembayaran</a></li>
    <li><a href="{!! url('/piutang'); !!}">Data Piutang</a></li>
    <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

    <div class="container-fluid">
        
        <div class="row mb-5">

            @yield('contentmenu')

        </div>

    </div>
@endsection