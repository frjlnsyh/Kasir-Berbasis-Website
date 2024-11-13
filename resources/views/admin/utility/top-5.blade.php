@extends('layouts.admin.admin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <b>top 5 penjualan</b>
      </div>
      <div class="card-body text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Produk</th>
              <th scope="col">Pcs</th>
            </tr>
          </thead>
          <tbody>
            @foreach($top5penjualan as $value)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$value->nama_produk}}</td>
              <td>{{$value->total_penjualan}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection