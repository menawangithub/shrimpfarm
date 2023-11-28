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
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">
                <a href="/daftartugas">Daftar Tugas/</a>
            </span>
            {{ $todo->custom_id }}
        </h4>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><strong>DAFTAR TUGAS</strong></h5>
                <span class="badge bg-warning">PANEN TOTAL</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('updateProgressTotal', ['id' => $todo->_id]) }}">
                    @csrf
                    <input type="hidden" name="id_panen" value="{{ $todo->id_panen }}">
                    <input type="hidden" name="id_todo_total" value="{{ $todo->id_todo_total }}">
                    <div class="row">
                        <!-- List group checkbox and accordion -->
                        <div class="col-lg-6">
                        <div class="demo-inline-spacing mt-3">
                        @foreach ($accordionItems as $index => $accordionItem)
                            @include('accordion-item-total', [
                                'index' => $index,
                                'title' => $accordionItem->title,
                                'content' => $accordionItem->content,
                                'checked' => $listTodoTotal->where('id_todo_total', $accordionItem->_id)->first() ? 'checked' : '',
                                'todoTotalId' => $accordionItem->_id,
                            ])
                        @endforeach
                        </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .list-group-item {
        border: none; /* Remove the border to make items appear closer together */
    }

    .list-group-item input {
        margin-right: 10px; /* Adjust the margin to control the spacing between the checkbox and text */
    }
</style>
@endsection
<script src="{{asset('assets/js/percentagebar.js')}}"></script>