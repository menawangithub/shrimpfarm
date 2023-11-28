@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
  document.location.href = "/onboard";
</script>
@endif
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-primary"><strong> Isikan Rencana Panen Anda </strong></h4>

        <!-- Basic Layout -->
        <form action="{{ isset($data->_id) ? route('saveEditDataPanen', ['id' => $data->_id]) : route('saveAddDataPanen') }}" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ isset($data->_id) ? $data->_id : '' }}">

            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-body">

                            <!-- Ukuran Panen -->
                            <div class="mb-3">
                                <label class="form-label" for="ukuran_panen">ID PANEN</label>
                                <input type="text" class="form-control" name="custom_id" id="custom_id" disabled value="{{ $data->custom_id }}" />
                                <!-- Include the custom_id as a hidden field so it is still sent with the form -->
                                <input type="hidden" name="custom_id" value="{{ $data->custom_id }}" />
                            </div>


                            <!-- Jenis Panen -->
                            <div class="mb-3">
                                <label class="form-label" for="jenis_panen">JENIS PANEN</label>
                                <select name="jenis_panen" id="jenis_panen" class="form-control">
                                    <option value="" {{ empty($data->jenis_panen) ? 'selected' : '' }}>Select Jenis Panen</option>
                                    <option value="PARSIAL" {{ $data->jenis_panen == 'PARSIAL' ? 'selected' : '' }}>PARSIAL</option>
                                    <option value="TOTAL" {{ $data->jenis_panen == 'TOTAL' ? 'selected' : '' }}>TOTAL</option>
                                </select>
                            </div>

                            <!-- Perkiraan Panen -->
                            <div class="mb-3">
                                <label class="form-label" for="perkiraan_panen">TANGGAL TEBAR BENIH</label>
                                <input type="text" class="form-control" name="perkiraan_panen" id="perkiraan_panen" placeholder="Pilih Tanggal"
                                    value="{{ $data->perkiraan_panen }}" />
                                <script>
                                    flatpickr("#perkiraan_panen", {
                                        dateFormat: "Y-m-d",
                                        enableTime: false,
                                    });
                                </script>
                            </div>

                            <!-- Ukuran Panen -->
                            <div class="mb-3">
                                <label class="form-label" for="ukuran_panen">UKURAN PANEN</label>
                                <input type="text" class="form-control" name="ukuran_panen" id="ukuran_panen" placeholder="20"
                                    value="{{ $data->ukuran_panen }}" />
                            </div>

                            <!-- Tonase Panen -->
                            <div class="mb-3">
                                <label class="form-label" for="tonase_panen">TONASE PANEN</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="tonase_panen" class="form-control" placeholder="200" name="tonase_panen"
                                        value="{{ $data->tonase_panen }}" />
                                    <span class="input-group-text" id="basic-default-email2">Kg</span>
                                </div>
                            </div>

                            <!-- Usia Budidaya -->
                            <div class="mb-3">
                                <label class="form-label" for="usia_panen">USIA BUDIDAYA</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="usia_panen" class="form-control" placeholder="30" name="usia_panen"
                                        value="{{ $data->usia_budidaya }}" />
                                    <span class="input-group-text" id="basic-default-email2">Hari</span>
                                </div>
                            </div>

                            <!-- Harga Panen -->
                            <div class="mb-3">
                                <label class="form-label" for="harga_panen">HARAPAN HARGA JUAL</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="harga_panen" class="form-control" placeholder="Rp.200.000" name="harga_panen"
                                        value="{{ $data->harga_harapan }}" />
                                    <span class="input-group-text" id="basic-default-email2">/Kg</span>
                                </div>
                            </div>

                            <!-- Lokasi Budidaya -->
                            <div class="mb-3">
                                <label class="form-label" for="lokasi_panen">LOKASI BUDIDAYA</label>
                                <input type="text" class="form-control" name="lokasi_panen" id="lokasi_panen" placeholder="Kolam 1"
                                    value="{{ $data->lokasi_budidaya }}" />
                            </div>

                            <!-- Hidden User ID -->
                            <div class="mb-3" style="display:none">
                                <label class="form-label" for="user_id">ID USER</label>
                                <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                            </div>

                            <br><br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
