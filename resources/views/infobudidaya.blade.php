@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
  document.location.href = "/onboard";
</script>
@endif
<div class="buy-now">
    <a
        href="/AddDataBudidaya/{{ session('id_user') }}"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >+ Tambah Data</a
    >
</div>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4 text-primary"><strong> Info Budidaya Anda </strong></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Daftar Info Budidaya</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Budidaya</th>
                        <th>Keterangan</th>
                        <th>Luas Kolam</th>
                        <th>Jumlah Ruas Kolam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $index)
                  <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $index->custom_id }}</strong></td>
                  <td>{{ $index->keterangan }}</td>
                  <td>{{ $index->luas_kolam }}</td>
                  <td>{{ $index->jumlah_ruas_kolam }}</td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item btnUpdateBudidaya" href="javascript:void(0);" data-id="{{ $index->_id }}"><i class="bx bx-edit-alt me-1"></i> Edit</a
                          >
                          <a class="dropdown-item btnDeleteBudidaya" href="javascript:void(0);" data-id_delete="{{ $index->_id }}"><i class="bx bx-trash me-1"></i> Delete</a
                          >
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <a href="{{ route('downloadBudidayaPDF', $userId) }}" class="btn btn-primary">
        Unduh Data PDF
    </a>
</div>
@endsection
