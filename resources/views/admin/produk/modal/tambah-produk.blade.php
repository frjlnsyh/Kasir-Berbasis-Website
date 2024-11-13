<!-- Modal Produk-->
<div class="modal fade" id="produkModal" tabindex="-1" aria-labelledby="bodyModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{url('admin/tambah-produk')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bodyModal">Tambah Produk</h1>
        </div>
        <div class="modal-body">
          <label for="">Foto Produk</label>
          <input type="file" name="image" class="form-control">

          <div class="row">
            <div class="col-6">
              <label for="">Nama Produk</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="col-6">
              <label for="">Kategori</label>
              <select class="form-select" name="kategori_id">
                <option selected disabled>-- Pilih Kategori --</option>
                @foreach($kategori as $value)
                <option value="{{$value->id}}">{{$value->kategori}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <label for="">Deskripsi Produk</label>
          <textarea name="deskripsi" id="" cols="4" class="form-control"></textarea>

          <label for="">Harga</label>
          <input type="text" name="harga" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>