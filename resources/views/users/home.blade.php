@extends('layouts.users.users')

@section('content')


<div class="container-fluid">
  <div class="circle" style="width:100%;height:16rem;background-color:#FF9843;position:absolute;z-index:-1;border-radius:0 0 100% 100%;max-width: 768px;"></div>
  <div class="row px-sm-5 px-4" style="margin-top: 4rem;">
    <div class="col-sm-8 mx-auto col-12">
      <div class="card border-0 shadow rounded-5" style="height:min-content;opacity:80%">
        <div class="card-body text-center">
          <h5>Selamat Datang, Pekerja !</h5>
          <p>Selamat Bekerja dan Beraktifitas dengan semangat</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid px-3" style="margin-top:100px">
  <div class="wrapper-produk text-center">
    <h3 class="ps-4 mt-3 mb-0"><b>Ayam Paketan</b></h3>
  </div>

  <div class="row mt-3">
    @foreach($produk as $value)
    @if($value->kategori->kategori === 'Ayam Paketan')
    <div class="col-sm-6 mt-sm-0 my-3 col-12">
      <div class="card mx-auto rounded-4 shadow border-0 d-flex flex-row" style="max-width: 18rem;">
        <img src="{{asset('uploads/produk/'.$value->image)}}" width="100px" alt="">
        <div class="card-body p-3">
          <h6 class="mb-0"><b>{{$value->nama }}</b></h6>
          <p>{{$value->deskripsi}}</p>
          <div class="row">
            <div class="col-6">
              <p>{{$value->harga}}</p>
            </div>
            <div class="col-6 text-end">
              <a href="" class="btn btn-primary add-to-cart-btn" data-produk-id="{{ $value->id }}"><i class="fa-solid fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>


<div class="container-fluid px-3">
  <div class="wrapper-produk text-center">
    <h3 class="ps-4 mt-3 mb-0"><b>Ayam Satuan</b></h3>
  </div>
  <div class="row mt-3">
    @foreach($produk as $value)
    @if($value->kategori->kategori === 'Ayam Satuan')
    <div class="col-sm-6 mt-sm-0 my-3 col-12">
      <div class="card mx-auto rounded-4 shadow border-0 d-flex flex-row" style="max-width: 18rem;">
        <img src="{{asset('uploads/produk/'.$value->image)}}" width="100px" alt="">
        <div class="card-body p-3">
          <h6 class="mb-0"><b>{{$value->nama }}</b></h6>
          <p>{{$value->deskripsi}}</p>
          <div class="row">
            <div class="col-6">
              <p>{{$value->harga}}</p>
            </div>
            <div class="col-6 text-end">
              <a href="" class="btn btn-primary add-to-cart-btn" data-produk-id="{{ $value->id }}"><i class="fa-solid fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>

<div class="container-fluid px-3">
  <div class="wrapper-produk text-center">
    <h3 class="ps-4 mt-3 mb-0"><b>Minuman</b></h3>
  </div>
  <div class="row mt-3">
    @foreach($produk as $value)
    @if($value->kategori->kategori === 'Minuman')
    <div class="col-sm-6 mt-sm-0 my-3 col-12">
      <div class="card mx-auto rounded-4 shadow border-0 d-flex flex-row" style="max-width: 18rem;">
        <img src="{{asset('uploads/produk/'.$value->image)}}" width="100px" alt="">
        <div class="card-body p-3">
          <h6 class="mb-0"><b>{{$value->nama }}</b></h6>
          <p>{{$value->deskripsi}}</p>
          <div class="row">
            <div class="col-6">
              <p>{{$value->harga}}</p>
            </div>
            <div class="col-6 text-end">
              <a href="" class="btn btn-primary add-to-cart-btn" data-produk-id="{{ $value->id }}"><i class="fa-solid fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>

<div class="container-fluid px-3">
  <div class="wrapper-produk text-center">
    <h3 class="ps-4 mt-3 mb-0"><b>Ice Cream</b></h3>
  </div>
  <div class="row mt-3">
    @foreach($produk as $value)
    @if($value->kategori->kategori === 'Ice Cream')
    <div class="col-sm-6 mt-sm-0 my-3 col-12">
      <div class="card mx-auto rounded-4 shadow border-0 d-flex flex-row" style="max-width: 18rem;">
        <img src="{{asset('uploads/produk/'.$value->image)}}" width="100px" alt="">
        <div class="card-body p-3">
          <h6 class="mb-0"><b>{{$value->nama }}</b></h6>
          <p>{{$value->deskripsi}}</p>
          <div class="row">
            <div class="col-6">
              <p>{{$value->harga}}</p>
            </div>
            <div class="col-6 text-end">
              <a href="" class="btn btn-primary add-to-cart-btn" data-produk-id="{{ $value->id }}"><i class="fa-solid fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>

<div class="container-fluid px-3" style="margin-bottom:100px">
  <div class="wrapper-produk text-center">
    <h3 class="ps-4 mt-3 mb-0"><b>Makanan Lainnya</b></h3>
  </div>
  <div class="row mt-3">
    @foreach($produk as $value)
    @if($value->kategori->kategori === 'Makanan Lainnya')
    <div class="col-sm-6 mt-sm-0 my-3 col-12">
      <div class="card mx-auto rounded-4 shadow border-0 d-flex flex-row" style="max-width: 18rem;">
        <img src="{{asset('uploads/produk/'.$value->image)}}" width="100px" alt="">
        <div class="card-body p-3">
          <h6 class="mb-0"><b>{{$value->nama }}</b></h6>
          <p>{{$value->deskripsi}}</p>
          <div class="row">
            <div class="col-6">
              <p>{{$value->harga}}</p>
            </div>
            <div class="col-6 text-end">
              <a href="" class="btn btn-primary add-to-cart-btn" data-produk-id="{{ $value->id }}"><i class="fa-solid fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>


@endsection