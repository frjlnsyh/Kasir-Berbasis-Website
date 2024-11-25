<!-- Modal Kategori -->
<div class="modal fade" id="kategoriModal" tabindex="-1" aria-labelledby="bodyModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{url('admin/tambah-kategori')}}" method="POST">
        @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bodyModal">Tambah Kategori</h1>
        </div>
        <div class="modal-body">
          <label for="">Nama Kategori</label>
          <select name="kategori" class="form-control">
            <option value="" selected disabled></option>
            <option value="Ayam Paketan">Ayam Paketan</option>
            <option value="Ayam Satuan">Ayam Satuan</option>
            <option value="Minuman">Minuman</option>
            <option value="Ice Cream">Ice Cream</option>
            <option value="Makanan Lainnya">Makanan Lainnya</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>