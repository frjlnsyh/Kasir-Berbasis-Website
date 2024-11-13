@extends('layouts.users.users')

@section('content')

<div class="container-fluid" style="margin-top: 4.5rem;">
  <div class="row justify-content-center my-4">
    <div class="col-12 col-sm-6 rounded-circle bg-light mx-sm-5 mx-auto shadow" style="width: 8rem;height: 8rem;">

    </div>
    <div class="col-12 col-sm-6">
      <div class="card border-0 shadow mx-auto my-3 my-sm-0" style="max-width: 18rem;">
        <div class="card-body">
          <table class="table">
            <tr>
              <th>Nama</th>
              <td>Users</td>
            </tr>
            <tr>
              <th>alamat</th>
              <td>Jln Kerawang No 11</td>
            </tr>
            <tr>
              <th>No. Telp</th>
              <td>0811828282</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="card my-5 border-0 mx-sm-5 mx-3 shadow">
    <div class="card-header border-0">
      <p class="mb-0"><b>Pengeluaran Lainnya</b></p>
    </div>
    <div class="card-body">
      <p class="mb-0">Ada pengeluara lainnya?</p>
      <p>Input disini yu **</p>
      <form action="{{url('users/pengeluaran-lainnya')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Apa yang di beli?</label>
        <input type="text" class="form-control" name="nama" id="">
        <label for="">Berapa Harganya</label>
        <input type="number" class="form-control" name="harga" id="">
        <label for="">Foto Struk Atau Barang</label>
        <input type="file" accept="image/*" class="form-control" name="foto" id="">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
    </div>
  </div>

  <div class="wrapper text-center mb-5">
    <a type="submit" href="{{ route('logout') }}" class="btn btn-danger px-4 py-3" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><b>{{ __('Logout') }}</b></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </div>

</div>

@endsection