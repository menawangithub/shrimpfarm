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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengaturan Akun /</span> Akun</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Detail Profil</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <hr class="my-0" />
                        <div class="card-body">
                        <div class="alert alert-danger" role="alert">Jika Anda merubah kategori Akun Anda dan fitur budidaya tidak langsung tampil, Silahkan log-out lalu login kembali.</div>
                            <form id="formAccountSettings" action="{{ route('updateprofile', ['id' => $user->id]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Nama Lengkap</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="firstName"
                                            name="firstName"
                                            value="{{$user->nama}}"
                                            autofocus
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                      <label class="form-label" for="basic-default-fullname">Kategori Anda</label>                                      
                                      <select name = "kategori" id="kategori" class="form-control">
                                          <option>{{($user->kategori)}}</option>
                                          <option>PEMBUDIDAYA</option>
                                          <option>NON-PEMBUDIDAYA</option>
                                      </select>
                                    </div>
                                    <!-- Add other profile fields here -->
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="email"
                                            name="email"
                                            value="{{$user->email}}"
                                            placeholder="john.doe@example.com"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Telepon</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="phoneNumber"
                                            name="phoneNumber"
                                            value="{{$user->phone}}"
                                            placeholder="0812 8812 1212 "
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$user->address}}"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              value="{{$user->zipcode}}"
                              placeholder="231465"
                              maxlength="6"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Kabupaten/Kota</label>
                            <input
                              type="text"
                              class="form-control"
                              id="kota"
                              name="kota"
                              value="{{$user->kota}}"
                              placeholder="Bekasi"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                              <label class="form-label">Provinsi</label>
                              <input
                              type="text"
                              class="form-control"
                              id="provinsi"
                              name="provinsi"
                              value="{{$user->provinsi}}"
                              placeholder="DKI Jakarta"
                            />
                          </div>
                          <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password Baru</label>
                            <small><div class="alert alert-danger" role="alert">Buat Password Baru Anda</div></small>
                            <div class="input-group input-group-merge">
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                value=""
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

@endsection
