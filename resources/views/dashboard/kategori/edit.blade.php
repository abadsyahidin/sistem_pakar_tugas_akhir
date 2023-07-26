@foreach ($kategoris as $item)
<div class="modal fade" id="edit{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Kategori Kucing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('kategori-kucing.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="col-form-label">Kategori Kucing</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Kategori Kucing" value="{{ $item->name }}">
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
