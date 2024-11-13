@extends('layouts.admin.admin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <b>Data Karyawan</b>
      </div>
      <div class="card-body text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">No. Telp</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($karyawan as $value)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$value->nama}}</td>
              <td>{{$value->no}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->alamat}}</td>
              <td class="d-flex flex-row align-items-center justify-content-center">
                <a href="" class="btn btn-info p-3 mx-1" data-bs-toggle="modal" data-bs-target="#modal-view{{$value->id}}"><i class="fa-solid fa-eye"></i></a>
                <a href="" class="btn btn-warning p-3 mx-1" data-bs-toggle="modal" data-bs-target="#modal-edit{{$value->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <!-- Modal Edit -->
                @include('admin\utility\modal\karyawan-edit')
                @include('admin\utility\modal\karyawan-view')

                <form action="{{url('admin/delete-karyawan/'.$value->id)}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger p-3 mx-1"><i class="fa-regular fa-square-minus"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $karyawan->links() }}
      </div>
    </div>
  </div>
  <div class="col-3 w-15 my-4">
        <a href="" class="btn btn-secondary h-100 rounded-pill d-flex flex-column justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#karyawanModal">+ Buat Karyawan</a>
  </div>
</div>



<!-- Modal Produk-->
@include('admin\utility\modal\karyawan-create')



@endsection