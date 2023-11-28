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
              <h4 class="fw-bold py-3 mb-4 text-primary"> <strong> Isikan Data Tambak Anda </strong></h4>

              <!-- Basic Layout -->
              <form action="{{ isset($data->_id) ? route('saveEditDataBudidaya', ['id' => $data->_id]) : route('saveAddDataBudidaya') }}" method="POST">
              @csrf
              <input type="hidden" name="id" id="id" value="{{ isset($data->_id) ? $data->_id : '' }}">
                <div class="row">
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-body">
                          <div class="mb-3">
                                <label class="form-label" for="ukuran_panen">ID BUDIDAYA</label>
                                <input type="text" class="form-control" name="custom_id" id="custom_id" disabled value="{{ $data->custom_id }}" />
                                <input type="hidden" name="custom_id" value="{{ $data->custom_id }}" />
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">KETERANGAN</label>
                            <input type="text" class="form-control" name = "keterangan" id="basic-default-company keterangan" placeholder="Keterangan" value ="{{ isset($data->keterangan) ? $data->keterangan : '' }}" />
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-email">LUAS KOLAM</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-text jumlah_ruas_kolam"
                                class="form-control"
                                placeholder="200"
                                name = "luas_kolam"
                                value ="{{ isset($data->luas_kolam) ? $data->luas_kolam : '' }}"
                              />
                              <span class="input-group-text" id="basic-default-email2">m2</span>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-email">JUMLAH RUAS KOLAM</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-text jumlah_ruas_kolam"
                                class="form-control"
                                placeholder="200"
                                name = "jumlah_ruas_kolam"
                                value ="{{ isset($data->jumlah_ruas_kolam) ? $data->jumlah_ruas_kolam : '' }}"
                              />
                              <span class="input-group-text" id="basic-default-email2">m2</span>
                            </div>
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
          @endsection        
            <!-- / Content -->

          