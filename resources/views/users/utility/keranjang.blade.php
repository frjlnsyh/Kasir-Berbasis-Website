@extends('layouts.users.users')

@section('content')

<div class="row" style="margin-bottom: 4rem;">
  <div class="col-12">
    <div class="card border-0 shadow mt-5 mx-4 mx-sm-5">
      <div class="card-header pt-4">
        <h3><b>Keranjang</b></h3>
      </div>
    </div>
    <div class="col-12">
      <div class="card my-2 mx-4 mx-sm-5 mt-4 border-0 shadow">
        <div class="card-body">
          <h4>Keranjang Belanja</h4>
          <hr class="my-3">
          @if(count($cart) > 0)
          <form action="{{url('users/checkout')}}"></form>
          @php
          $totalPrice = 0; // Inisialisasi total harga
          @endphp

          @foreach($cart as $item)
          <?php if ($item['id'] > 1)
            echo '<hr>';
          ?>
          <div class="d-flex my-2">
            <detail-produk class="mb-3 mb-sm-0">
              <span name="nama_produk">Nama Produk : <b>{{ $item['nama_produk'] }}</b></span>
              <br>
              <span>Harga : <b><span name="harga" id="price_{{ $item['id'] }}"></span></b></span>
            </detail-produk>
          </div>
          <quantity-produk class="d-flex justify-content-end align-items-center">
            <button class="btn btn-warning mx-2 update-item-btn" data-produk-id="{{ $item['id'] }}">+</button>
            <span id=" quantity_{{ $item['id'] }}">{{ $item['quantity'] }}</span>
            <button class="btn btn-warning mx-2 eraser-item-btn" data-produk-id="{{ $item['id'] }}">-</button>
            <a href="" class="btn btn-danger remove-item-btn" data-produk-id="{{ $item['id'] }}"><i class="fa-solid fa-trash"></i></a>
          </quantity-produk>
          @php
          $totalPrice += $item['harga'] * $item['quantity'] ;
          @endphp
          @endforeach

          <footer-produk>
            <hr class="my-3">
            <div class="d-flex flex-row justify-content-between">
              <div class="">
                <span>Total Harga </span>
              </div>
              <div class="">
                <span class=" justify-content-end" id="totalPrice"><b>{{ $totalPrice }}</b></span>
              </div>
            </div>
            <hr class="my-3">
          </footer-produk>
          <form action="{{url('users/checkout')}}" class="text-center" method="post">
            @csrf
            <button class="btn btn-primary mt-2 p-3" type="submit"><b>Checkout</b></button>
          </form>
          @else
          <p>Keranjang belanja kosong.</p>
          @endif

        </div>
      </div>
    </div>
  </div>
</div>

@foreach($cart as $item)
<script>
  var harga = <?php echo json_encode($item['harga']); ?>;
  var itemId = <?php echo json_encode($item['id']); ?>;
  document.getElementById('price_' + itemId).textContent = harga;
</script>
@endforeach

@endsection