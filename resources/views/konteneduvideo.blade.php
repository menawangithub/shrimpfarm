@extends('templates')
@section('content')
@if(!session()->has('login'))
<script>
  document.location.href = "/onboard";
</script>
@endif

  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/kontenedukasi">Konten Budidaya Video</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$data->judul_video}}</li>
        </ol>
      </nav>

      <!-- Judul Video -->
      <h2 class="fw-bold py-3 text-primary">{{$data->judul_video}}</h2>

      <!-- Video Player -->
      <div class="embed-responsive-16by9">
      <iframe
                width="100%"
                height="500px"
                src="https://www.youtube.com/embed/{{ $data->url }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
      </div>

      <!-- Deskripsi Video -->
      <div class="mt-4 ">
        <h3 class="fw-bold py-3 text-primary">Deskripsi</h3>
        <p>
          {{$data->deskripsi}}
        </p>
      </div>

      <!-- Bagian Komentar -->
      @if (count($data->comments) > 0)
      <h5 class="mt-0 mb-1">{{ $comment->user['nama_user'] ?? '' }}</h5>
      <div class="mt-4">
          <h3 class="fw-bold py-3 text-primary">Komentar</h3>
          <form method="post" action="{{ route('PostComment')}}">
            @csrf
              <input type="hidden" name="id_video" value="{{ $data->_id }}">
              <input type="hidden" name="id" value="{{session('id_user')}}">
              <input type="hidden" name="nama_user" value="{{session('nama_user')}}">
              <div class="form-group">
                  <textarea name="isi_komentar" class="form-control" id="isiKomentar" rows="3" placeholder="Tulis komentar Anda"></textarea>
              </div>
              <br>
              <div class="btn-group">
                  <button type="submit" class="btn btn-primary">Kirim Komentar</button>
              </div>
          </form>

          <br>
          <br>
          <br>

          <ul class="list-unstyled">
          <h5 for="isiKomentar" class="text-primary"><strong>Apa Kata Mereka? </strong></h5>
          <br>
              @foreach ($data->comments as $comment)

              <li class="media">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-20 h-auto rounded-circle" style="margin-right: 10px;" />
                    <div>
                        <p class="mt-0 mb-1 text-primary"><strong>{{ $comment->nama_user }}</strong></p>
                    </div>
                  </div>

                    <div class="media-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                {{ $comment->isi_komentar }}
                                <p class="text-muted">
                                    @php
                                        try {
                                            $formattedDate = \Carbon\Carbon::createFromFormat('d/m/Y', $comment->tanggal_post)->format('j F Y');
                                        } catch (\Exception $e) {
                                            $formattedDate = '';
                                        }
                                    @endphp
                                    {{ $formattedDate }}
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
              @endforeach
          </ul>
      </div>
      @endif
    </div>
  </div>
@endsection
