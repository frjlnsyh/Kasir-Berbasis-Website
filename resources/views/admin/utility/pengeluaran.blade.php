@extends('layouts.admin.admin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <b>Data Pengeluaran</b>
        <form action="{{ url('admin/search-pengeluaran') }}" method="GET">
          <div class="card-body d-flex flex-row justify-content-end px-2">
            <input class="form-control ms-2 my-0" style="width:43px" type="date" name="tanggal" id="tanggal">
            <button class="btn btn-info ms-2 my-0" type="submit">Cari</button>
          </div>
        </form>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Waktu</th>
              <th scope="col">Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Foto</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pengeluaran as $value)
            <tr>
              <td scope="col">{{$loop->iteration}}</td>
              <td scope="col">{{$value->created_at}}</td>
              <td scope="col">{{$value->nama}}</td>
              <td scope="col">{{$value->harga}}</td>
              <td scope="col"><img src="{{asset('uploads/pengeluaran/'.$value->foto)}}" width="100px" alt=""></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $pengeluaran->links() }}
      </div>
    </div>
  </div>
</div>

@endsection