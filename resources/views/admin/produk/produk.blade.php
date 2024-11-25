@extends('layouts.admin.admin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <b>Data Produk Ayam Paketan</b>
      </div>
      <div class="card-body text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Foto Produk</th>
              <th scope="col">Kategori</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Deskripsi Produk</th>
              <th scope="col">Harga Produk</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($produk->sortBy('kategori_id') as $value)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td><img src="{{asset('uploads/produk/'.$value->image)}}" style="width:100px"></td>
              <td>{{$value->kategori->kategori}}</td>
              <td>{{$value->nama}}</td>
              <td>{{$value->deskripsi}}</td>
              <td>{{$value->harga}}</td>
              <td class="d-flex flex-row align-items-center justify-content-center">
                <a href="" class="btn btn-info p-3 mx-1" data-bs-toggle="modal" data-bs-target="#viewModal{{$value->id}}"><i class="fa-solid fa-eye"></i></a>
                <a href="" class="btn btn-warning p-3 mx-1" data-bs-toggle="modal" data-bs-target="#editModal{{$value->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                @include('admin.produk.modal.edit-produk')
                @include('admin.produk.modal.view-produk')
                <form action="{{url('admin/delete-produk/'.$value->id)}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger p-3 mx-1"><i class="fa-regular fa-square-minus"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            @include('admin.produk.modal.tambah-produk')
            @include('admin.produk.modal.tambah-kategori')
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-2 my-4">
    <a href="" class="btn btn-secondary h-100 rounded-pill d-flex flex-column justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#produkModal">+ Buat Produk</a>
  </div>
</div>

@endsection