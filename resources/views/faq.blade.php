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
    <h4 class="fw-bold py-3 mb-4 text-primary">FAQ (Pertanyaan Seputar ShrimpFarm) & Bantuan</h4>

    <div class="row">
      <div class="col-md mb-4 mb-md-0">
        <small class="text-light fw-semibold">Pertanyaan Terbaru</small>
        <div class="accordion mt-3" id="accordionExample">

          <!-- Loop through each FAQ -->
          @foreach($data as $faq)
          <div class="card accordion-item active">
            <h2 class="accordion-header" id="headingOne">
              <button
                type="button"
                class="accordion-button"
                data-bs-toggle="collapse"
                data-bs-target="#accordion{{ $loop->index }}"
                aria-expanded="true"
                aria-controls="accordion{{ $loop->index }}"
              >
                <b>{{ $faq->judul_faq }}</b>
              </button>
            </h2>

            <div
              id="accordion{{ $loop->index }}"
              class="accordion-collapse collapse show"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                {{ $faq->isi_faq }}
              </div>
            </div>
          </div>
          @endforeach
          <!-- End loop -->
        </div>
      </div>
    </div>

    <div class="buy-now">
      <a
        href="https://wa.me/6281290154792/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
      >Hubungi Kami</a
      >
    </div>
  </div>
</div>
@endsection
