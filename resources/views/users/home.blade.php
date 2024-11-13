@extends('layouts.users.users')

@section('content')


<div class="container-fluid">
  <div class="circle" style="width:100%;height:16rem;background-color:orange;position:absolute;z-index:-1;border-radius:0 0 100% 100%;max-width: 768px;"></div>
  <div class="row px-sm-5 px-4" style="margin-top: 4rem;">
    <div class="col-sm-8 col-12">
      <div class="card mx-auto border-0 shadow rounded-5" style="height:min-content;opacity:80%">
        <div class="card-body">
          <h5>Selamat Datang, Pekerja !</h5>
          <p>Selamat Bekerja dan Beraktifitas dengan semangat</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-4 mt-sm-0 col-12" style="margin-bottom:20px;opacity:80%">
      <div class="card mx-auto h-100 border-0 shadow rounded-5">
        <div class="card-body text-center">
          <p><b>{{ date('d F Y') }}</b></p>
          <p>{{ date('H:i') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid px-3" style="margin-top:50px">
  <div class="wrapper-produk">
    <h3 class="ps-4 mt-3 mb-0"><b>Ayam Paketan</b></h3>
  </div>
  <hr class="mb-1 mt-2" style="border-top:2px solid black;width:295px;">
  <hr class="mt-1 mb-2" style="border-top:2px solid black;width:340px;">

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
  <div class="wrapper-produk">
    <h3 class="ps-4 mt-3 mb-0"><b>Ayam Satuan</b></h3>
  </div>
  <hr class="mb-1 mt-2" style="border-top:2px solid black;width:295px;">
  <hr class="mt-1 mb-2" style="border-top:2px solid black;width:340px;">

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
  <div class="wrapper-produk">
    <h3 class="ps-4 mt-3 mb-0"><b>Minuman</b></h3>
  </div>
  <hr class="mb-1 mt-2" style="border-top:2px solid black;width:295px;">
  <hr class="mt-1 mb-2" style="border-top:2px solid black;width:340px;">

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
  <div class="wrapper-produk">
    <h3 class="ps-4 mt-3 mb-0"><b>Ice Cream</b></h3>
  </div>
  <hr class="mb-1 mt-2" style="border-top:2px solid black;width:295px;">
  <hr class="mt-1 mb-2" style="border-top:2px solid black;width:340px;">

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
  <div class="wrapper-produk">
    <h3 class="ps-4 mt-3 mb-0"><b>Makanan Lainnya</b></h3>
  </div>
  <hr class="mb-1 mt-2" style="border-top:2px solid black;width:295px;">
  <hr class="mt-1 mb-2" style="border-top:2px solid black;width:340px;">

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