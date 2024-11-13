@extends('layouts.admin.admin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <b>Data Penjualan</b>
        <form action="{{ url('admin/search-penjualan') }}" method="GET">
          <div class="card-body d-flex flex-row justify-content-end px-2">
            <input class="form-control ms-2 my-0" style="width:43px" type="date" name="tanggal" id="tanggal">
            <button class="btn btn-info ms-2 my-0" type="submit">Cari</button>
          </div>
        </form>
      </div>
      <div class="card-body text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Waktu</th>
              <th scope="col">Produk</th>
              <th scope="col">Pcs</th>
              <th scope="col">Harga</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach($penjualan as $value)
            <tr>
              <th scope="row">{{$global_iteration = ($penjualan->currentPage() - 1) * $penjualan->perPage() + $loop->iteration}}</th>
              <td>{{$value->created_at}}</td>
              <td>{{$value->nama_produk}}</td>
              <td>{{$value->jumlah}}</td>
              <td>{{$value->harga}}</td>
              <td>{{$value->harga * $value->jumlah}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $penjualan->links() }}
      </div>
    </div>
  </div>
</div>

@endsection