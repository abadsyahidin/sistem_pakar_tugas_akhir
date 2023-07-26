@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori Kucing</h1>
</div>

@if (session()->has('berhasil'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('berhasil') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <div class="my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
        Tambah Kategori kucing
      </button>
  </div>
  <div class="table-responsive">
  <table id="datatables" class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Slug Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
           @foreach ($kategoris as $item)
           <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $item->name }}</td>
             <td>{{ $item->slug }}</td>
             <td>
              {{-- <a href="#" class="badge
                btn-info"><span data-feather="eye"></span></a> --}}

              {{-- <a href="#" class="badge btn-warning"><span data-feather="edit"></span></a> --}}
              <button type="button" class="badge btn-warning " data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}">
                <span data-feather="edit"></span> Edit
              </button>

              <form action="{{ route('kategori-kucing.destroy', $item->id) }}" method="post" class="d-inline">
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
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori Kucing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('kategori-kucing.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="col-form-label">Kategori Kucing</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Kategori Kucing">
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
@include('dashboard.kategori.edit')

@push('script')
<script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
<script>
        $(document).ready(function () {
            $('#datatables').DataTable();
        });
    </script>
@endpush

@endsection
