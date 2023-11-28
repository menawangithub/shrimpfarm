@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
  document.location.href = "/onboard";
</script>
@endif

<div class="buy-now">
    <a
        href="https://wa.me/6281290154792/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Konsultasi Sekarang!</a
    >
</div>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold text-center py-3 mb-4 display-4 text-primary">Sukseskan Panenmu dengan <br> Konsultasi Budidaya</h4>

        <div class="card-group mb-5">
            <div class="card">
                <img class="card-img-top" src="{{asset('assets/img/elements/35.png')}}" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title"><strong>Konsultasi Gratis</strong></h5>
                    <p class="card-text">
                        Diskusi semuanya tentang budidaya tanpa pungutan biaya apapun.
                    </p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="{{asset('assets/img/elements/34.png')}}" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title"><strong>Langsung Dengan Ahlinya</strong></h5>
                    <p class="card-text">
                        Konsultasi budidaya mulai dari pH air hingga penyakit udang dengan pakarnya.
                    </p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="{{asset('assets/img/elements/33.png')}}" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title"><strong>Chat Via WhatsApp</strong></h5>
                    <p class="card-text">
                        Ahli kami akan selalu siap melayani Kamu.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
