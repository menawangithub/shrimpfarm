@extends('templates')

@section('content')
    @if(!session()->has('login'))
        <script>
            document.location.href = "/onboard";
        </script>
    @endif

    @php
        $checkedAccordionsCount = isset($checkedAccordionsCount) ? $checkedAccordionsCount : 0;
    @endphp

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><strong>Daftar Tugas Anda</strong></h5>
                            <p class="mb-4">
                                Tingkatkan Produktifitas Budidaya Anda dengan bantuan
                                <span class="fw-bold"> Daftar Tugas ShrimpFarm</span> dan capai panen yang lebih optimal!
                            </p>
                        </div>
                    </div>
                </div>

                @foreach ($data as $todo)
                    <div class="col-lg-4 mb-4 order-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                             class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt{{ $todo->_id }}"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt{{ $todo->_id }}">
                                            @if($todo->jenis_panen == 'TOTAL')
                                                <a class="dropdown-item" href="/viewtotal/{{ $todo->_id }}">View More</a>
                                            @else
                                                <a class="dropdown-item" href="/viewparsial/{{ $todo->_id }}">View More</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @php
                                  $tanggalTebarBenih = \Carbon\Carbon::parse(str_replace('GMT+0700 (Western Indonesia Time)', '', $todo->perkiraan_panen));
                                  $tanggalPembaharuan = \Carbon\Carbon::parse($todo->updated_at);
                                  $selisihHari = $tanggalPembaharuan->diffInDays($tanggalTebarBenih);
                              @endphp

                              <p class="card-text text-muted">
                                  <strong class="text-primary">Tanggal Tebar Benih:</strong> {{ $tanggalTebarBenih->translatedFormat('l, d F') }}
                              </p>
                              <p class="card-text text-muted">
                                  <strong class="text-primary">Pembaharuan Terakhir:</strong> {{ $tanggalPembaharuan->translatedFormat('l, d F') }}
                              </p>
                              <p class="card-text text-muted">
                                  <strong class="text-primary">Keterangan :</strong> {{ $selisihHari }} hari setelah tebar benih
                              </p>

                                <span class="d-block mb-1">ID RENCANA PANEN</span>
                                <h3 class="card-title mb-3"><strong>{{ $todo->custom_id }}</strong></h3>

                                <div class="progress">
                                    <div id="progressBar{{ $todo->_id }}" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        style="width: {{ $todo->progress }}%" 
                                        aria-valuenow="{{ $todo->progress }}" 
                                        aria-valuemin="0" 
                                        aria-valuemax="100">
                                        {{ $todo->progress }}%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
