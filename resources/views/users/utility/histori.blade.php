@extends('layouts.users.users')

@section('content')

<div class="container-fluid" style="margin-top: 4.5rem">
  <div class="d-flex justify-content-center">
    <h4 class="mb-4 text-center"><b>History Penjualan</b></h4>
    <form action="{{ url('users/search-histori') }}" method="GET">
      <div class="card-body d-flex flex-row justify-content-end px-2">
        <input class="form-control ms-2" style="width:43px" type="date" name="tanggal" id="tanggal">
        <button class="btn btn-info ms-2" type="submit">Cari</button>
      </div>
    </form>
  </div>
  <div class="row">
    @foreach($penjualan as $value)
    <div class="col-12 col-sm-6">
      <div class="card mx-4 my-3 border-0 shadow">
        <div class="card-header border-0">
          <p class="mb-0">{{$value->created_at}}</p>
        </div>
        <div class="card-body">
          <span>Produk : {{$value->nama_produk}}</span> <br>
          <span>Jumlah : {{$value->jumlah}}</span><br>
          <span>Harga : {{$value->harga}}</span><br>
          <span>Total : {{$value->harga * $value->jumlah}}</span>
        </div>
      </div>
    </div>
    @endforeach
    {{ $penjualan->links() }}
  </div>
</div>

@endsection