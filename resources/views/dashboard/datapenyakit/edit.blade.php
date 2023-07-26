@foreach ($data_penyakit as $item)
<div class="modal fade" id="edit{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Data Penyakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('datapenyakit.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="kode_penyakit" class="col-form-label">Kode Penyakit</label>
                <input type="text" class="form-control" name="kode_penyakit" id="kode_penyakit" placeholder="Kode Penyakit" value="{{ $item->kode_penyakit }}">
            </div>
            <div class="mb-3">
                <label for="nama_penyakit" class="col-form-label">Nama Penyakit</label>
                <input type="text" class="form-control" name="nama_penyakit" id="nama_penyakit" placeholder="Nama Penyakit" value="{{ $item->nama_penyakit }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="col-form-label">Deskripsi Penyakit</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10">{{ $item->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="penanganan" class="col-form-label">Diagnosa Penyakit</label>
                <textarea name="penanganan" id="penanganan" class="form-control" rows="10">{{ $item->penanganan }}</textarea>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
    </div>
</div>

@endforeach
