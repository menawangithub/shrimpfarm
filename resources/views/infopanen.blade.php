@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
  document.location.href = "/onboard";
</script>
@endif

<div class="buy-now">
    <a
        href="/AddDataPanen/{{ session('id_user') }}"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >+ Tambah Data</a
    >
</div>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4 text-primary"><strong> Rencana Panen </strong></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Daftar Rencana Panen</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Panen</th>
                        <th>Jenis Panen</th>
                        <th>Tanggal Tebar Benih</th>
                        <th>Ukuran Panen</th>
                        <th>Tonase Panen</th>
                        <th>Usia Budidaya</th>
                        <th>Harapan Harga Jual</th>
                        <th>Lokasi Tambak</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data ?? [] as $index)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $index->custom_id }}</strong></td>
                            <td><span class="badge bg-label-primary me-1">{{ $index->jenis_panen }}</span></td>
                            <td><span class="d-flex align-items-center"><i class="bi bi-calendar-date me-2"></i>{{ \Carbon\Carbon::parse($index->perkiraan_panen)->translatedFormat('l, d F H:i') }}</span></td> 
                            <td>{{ $index->ukuran_panen }}</td>
                            <td>{{ $index->tonase_panen ?? '' }}</td>
                            <td>{{ $index->usia_budidaya ?? '' }}</td>
                            <td>{{ 'Rp ' . number_format($index->harga_harapan, 0, ',', '.') }}</td>
                            <td>{{ $index->lokasi_budidaya ?? '' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item btnDelete" href="javascript:void(0);" data-id_delete="{{ $index->_id }}"><i class="bx bx-trash me-1"></i> Delete</a>
                                    <a class="dropdown-item btnUpdate" href="{{ url('/EditDataPanen/' . $index->_id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                    </div>
                                </div>
                            </td>
                            <td style="display:none;">{{ $index->id_user ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <a href="{{ route('downloadPanenPDF', $userId) }}" class="btn btn-primary">
        Unduh Data PDF
    </a>
</div>
@endsection
