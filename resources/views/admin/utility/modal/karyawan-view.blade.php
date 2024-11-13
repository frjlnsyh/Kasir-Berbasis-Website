<div class="modal fade" id="modal-view{{$value->id}}" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ url('admin/edit-karyawan/'. $value->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Edit Karyawan</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Foto Karyawan</label><br>
                        <img src="{{asset('uploads/karyawan/'.$value->image)}}" alt="" style="width:100px">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $value->nama }}" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $value->email }}" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" readonly="true">{{ $value->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no">No. Telepon</label>
                        <input type="text" class="form-control" id="no" name="no" value="{{ $value->no }}" readonly="true">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ok</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>