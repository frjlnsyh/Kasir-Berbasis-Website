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
          <input type="text" name="kategori" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>