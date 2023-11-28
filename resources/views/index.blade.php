@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
  document.location.href = "/onboard";
</script>
@endif

          <!-- / Navbar -->
          
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Congratulations Card -->
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <br>
                          @if(session()->has('login'))
                            <h5 class="card-title text-primary" style="font-size: 28px;"><strong>Selamat Datang Kembali {{ session('nama') }} 🎉</strong></h5>
                          @endif
                          <br>

                          @if(session('kategori') == "PEMBUDIDAYA")
                            <p class="mb-4" style="font-size: 18px;">
                              Tingkatkan produktivitas budidaya udang Anda dengan <span class="fw-bold">ShrimpFarm</span> ! Gunakan fitur lainnya untuk mendukung operasi budidaya udang yang efisien dan berkelanjutan.
                            </p>                                                
                          @endif

                          @if(session('kategori') == "NON-PEMBUDIDAYA")
                            <p class="mb-4" style="font-size: 18px;">
                              Akses Informasi Lengkap seputar Budidaya Udang dengan <span class="fw-bold">ShrimpFarm</span> ! Mulai perjalanan Anda menjadi calon pembudidaya udang yang efisien dan berkelanjutan.
                            </p>
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="250"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @if(session('kategori') == "PEMBUDIDAYA")
                <div class="col-lg-4 mb-4 order-2">
                  <!-- Data Udang Card -->
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1 text-primary">Data Panen</span>
                      <h3 class="card-title mb-2">{{$data}} Jenis</h3>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4 mb-4 order-2">
                  <!-- Data Tambak Card 1 -->
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1 text-primary">Data Kolam</span>
                      <h3 class="card-title mb-2">{{$databudidaya}} Kolam</h3>
                    </div>
                  </div>
                </div>
                
                 <!-- di keep biar rapih -->
                <div class="col-lg-4 mb-4 order-3">

                </div>
                <!-- di keep biar rapih -->

                <div class="col-lg-12 mb-4 order-3">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h3 class="m-0 me-2 text-primary"><strong> Daftar Tugas Anda </strong></h3>
                                    <br>

                                    <!-- Initialize taskCount variable -->
                                    @php
                                        $taskCount = 0;
                                        $totalProgress = 0;
                                    @endphp

                                    <!-- Display overall progress bar here -->
                                    @foreach ($tasksByPanen as $tasks)
                                        @foreach ($tasks as $todo)
                                            @php
                                                $totalProgress += $todo->progress;
                                                $taskCount++;
                                            @endphp
                                        @endforeach
                                    @endforeach

                                    @php
                                        $overallProgress = $taskCount > 0 ? $totalProgress / $taskCount : 0;
                                    @endphp

                                    <div class="progress">
                                        <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                            style="width: {{ $overallProgress }}%" aria-valuenow="{{ $overallProgress }}" aria-valuemin="0" aria-valuemax="100">
                                            {{ $overallProgress }}%
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="row">
                                        @foreach ($tasksByPanen as $tasks)
                                            @foreach ($tasks as $todo)
                                                <div class="col-lg-6 mb-4 order-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <!-- Your existing card content -->
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endif
            </div>
          </div>
        </div>
@endsection