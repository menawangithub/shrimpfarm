@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
    document.location.href = "/onboard";
</script>
@endif

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold py-3 text-primary"><strong>Konten Edukasi</strong></h1>
            </div>
        </div>

        <!-- Video Cards -->
        <h3 class="pb-1 mb-4">#Video Budidaya</h3>
        <div class="row mb-5">
            @foreach ($videos as $video)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <iframe width="100%" height="150" src="https://www.youtube.com/embed/{{ $video->url }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><strong>{{ $video->judul_video }}</strong></h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($video->deskripsi, 100) }}</p>
                            <a href="{{ route('VideoBudidaya', ['id' => $video->_id]) }}" class="btn btn-outline-primary btnTonton">Tonton Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Breadcrumbs video -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item prev">
                    <a class="page-link" href="{{ $videos->previousPageUrl() }}"><i class="tf-icon bx bx-chevrons-left"></i></a>
                </li>
                <li class="page-item {{ ($videos->currentPage() == 1) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $videos->url(1) }}">1</a>
                </li>
                <li class="page-item {{ ($videos->currentPage() == 2) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $videos->url(2) }}">2</a>
                </li>
                <li class="page-item {{ ($videos->currentPage() == 3) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $videos->url(3) }}">3</a>
                </li>
                <li class="page-item next">
                    <a class="page-link" href="{{ $videos->nextPageUrl() }}"><i class="tf-icon bx bx-chevrons-right"></i></a>
                </li>
            </ul>
        </nav>
        <!-- End breadcrumbs video -->

        <!-- Artikel Budidaya -->
        <h3 class="pb-1 mb-4">#Artikel Budidaya</h3>
        <br>
        <div class="row mb-5 justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="card-img card-img-left" src="{{ $article->gambar }}" alt="Card image"
                                     style="height: 300px; object-fit: cover;" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"><small class="text-muted">{{ $article->tanggal_terbit }}</small></p>
                                    <h5 class="card-title text-primary"><strong>{{ $article->judul_artikel }}</strong></h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($article->isi_artikel, 100) }}</p>
                                    <br>
                                    <a href="{{ route('ArtikelBudidaya', ['id' => $article->_id]) }}" class="btn btn-outline-primary btnBaca">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination for Articles -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item prev">
                    <a class="page-link" href="{{ $articles->previousPageUrl() }}"><i class="tf-icon bx bx-chevrons-left"></i></a>
                </li>
                <li class="page-item {{ ($articles->currentPage() == 1) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $articles->url(1) }}">1</a>
                </li>
                <li class="page-item {{ ($articles->currentPage() == 2) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $articles->url(2) }}">2</a>
                </li>
                <li class="page-item {{ ($articles->currentPage() == 3) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $articles->url(3) }}">3</a>
                </li>
                <li class="page-item next">
                    <a class="page-link" href="{{ $articles->nextPageUrl() }}"><i class="tf-icon bx bx-chevrons-right"></i></a>
                </li>
            </ul>
        </nav>
        <!-- End Pagination for Articles -->

    </div>
</div>
@endsection
