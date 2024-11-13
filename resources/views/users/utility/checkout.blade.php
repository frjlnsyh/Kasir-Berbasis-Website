@extends('layouts.users.users')

@section('content')
<div class="container" style="margin-top:60px;margin-bottom:100px;">
  @php
  $totalPrice = 0; // Inisialisasi total harga
  $total = 0; // Inisialisasi total harga
  @endphp
  <div class="card border-0 shadow">
    <div class="card-header border-0" style="background-color: orange;">
      <h4><b>Checkout</b></h4>
    </div>
    <div class="card-body">
      @foreach($checkoutdatas as $value)
      <div class="d-flex justify-content-between">
        <item>
          <span>Produk</span>
          <br>
          <span><b>{{$value->nama_produk}}</b>
            <br></span>
          <span>@</span>
          <span>{{$value->jumlah}}</span>
        </item>
        <price class="text-end">
          <span>Harga</span>
          <br>
          <span><b>Rp {{ number_format($value->harga, 2, ',', '.') }}</b></span>
        </price>
      </div>
      @php
      $totalPrice += $value->harga * $value->jumlah; // Update total harga
      $total += $totalPrice; // Update total harga
      @endphp
      <br>
      <br>
      @endforeach
      <hr class="my-2">
      <div class="d-flex justify-content-between">
        <span>PPN</span>
        <span>0%</span>
      </div>
      <hr class="my-2">
      <div class="d-flex justify-content-between align-items-center">
        <span>Jumlah</span>
        <span><b style="font-size: 30px;">Rp {{ number_format($totalPrice, 0 , ',', '.') }}</b><sub></sub></span>
      </div>
      <hr class="my-2">
      <div class="d-flex justify-content-between" style="margin-top:70px">
        <form action="{{url('users/bill')}}" method="post">
          @csrf
          <button class="btn btn-info" type="submit">Selesaikan</button>
        </form>
        <a href="{{url('users/keranjang')}}" class="btn btn-warning">berubah pikiran?</a>
      </div>
    </div>
  </div>
</div>

@endsection