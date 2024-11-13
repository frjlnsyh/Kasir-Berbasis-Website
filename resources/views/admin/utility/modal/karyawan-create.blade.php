<div class="modal fade" id="karyawanModal" tabindex="-1" aria-labelledby="karyawanModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{url('admin/tambah-karyawan')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="karyawanModal">Tambah Produk</h1>
        </div>
        <div class="modal-body">
          <label for="">Foto Karyawan</label>
          <input type="file" name="image" class="form-control">
          
          <label for="">Nama Karyawan</label>
          <input type="text" name="nama" class="form-control">

          <label for="">Email Karyawan</label>
          <input type="email" name="email" class="form-control">

          <label for="">Alamat Karyawan</label>
          <textarea name="alamat" id="" cols="4" class="form-control"></textarea>

          <label for="">No. Telpon Karyawan</label>
          <input type="number" name="no" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>