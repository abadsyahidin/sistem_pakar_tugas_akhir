@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Penyakit</h1>
</div>

@if (session()->has('berhasil'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('berhasil') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <div class="my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
        Tambah Data Penyakit
      </button>
  </div>
  <div class="table-responsive">
  <table id="datatables" class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Penyakit</th>
          <th scope="col">Nama Peneyakit</th>
          <th scope="col">Deskripsi Peneyakit</th>
          <th scope="col">Diagnosa Peneyakit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
           @foreach ($data_penyakit as $item)
           <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $item->kode_penyakit }}</td>
             <td>{{ $item->nama_penyakit }}</td>
             <td>{{ $item->deskripsi }}</td>
             <td>{{ $item->penanganan }}</td>
             <td>
              <button type="button" class="badge btn-warning " data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}">
                <span data-feather="edit"></span> Edit
              </button>

              <form action="{{ route('datapenyakit.destroy', $item->id) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Data ini akan dihapus?')">
                  <span data-feather="x-circle"></span> Hapus
                </button>
              </form>

             </td>
           </tr>
           @endforeach
      </tbody>
    </table>
  </div>
</div>


  <!-- Modal -->
<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Penyakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('datapenyakit.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="col-form-label">Kode Penyakit</label>
                <input type="text" class="form-control" name="kode_penyakit" id="name" placeholder="Kode Penyakit">
            </div>
            <div class="mb-3">
                <label for="name" class="col-form-label">Nama Penyakit</label>
                <input type="text" class="form-control" name="nama_penyakit" id="name" placeholder="Nama Penyakit">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="col-form-label">Deskripsi Penyakit</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="penanganan" class="col-form-label">Diagnosa Penyakit</label>
                <textarea name="penanganan" id="penanganan" class="form-control" rows="10"></textarea>
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

{{-- modal Edit --}}
@include('dashboard.datapenyakit.edit')

@push('script')
<script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
<script>
        $(document).ready(function () {
            $('#datatables').DataTable();
        });
    </script>
@endpush

@endsection
