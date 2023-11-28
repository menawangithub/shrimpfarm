<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register Akun ShrimpFarm</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/sf200.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="" class="app-brand-link gap-2">
                  <img src="{{asset('assets/img/logo/sf200.png')}}" style="width=30px" alt="Logo ShrimpFarm">
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 text-center text-primary"><strong>Selamat Datang di ShrimpFarm</strong></h4>
              <p class="mb-4 text-center">Buat Perencanaan Panen Anda lebih teratur!</p>

              <form id="formAuthentication" class="mb-3" action="/register" method="POST">
              @csrf
              <input type="hidden" name="id" id="id" value ="<?= ($data->_id) ?? '' ?>">
              <div class="mb-3 ">
                            <label for="firstName" class="form-label">Nama Lengkap</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value="<?= ($data->firstName) ?? '' ?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Pilih Kategori Anda</label>
                            <select name = "kategori" id="kategori" class="form-control">
                                <option><?= ($data->kategori) ?? '' ?></option>
                                <option>PEMBUDIDAYA</option>
                                <option>NON-PEMBUDIDAYA</option>
                            </select>
                          </div>
                          <div class="mb-3 ">
                            <label for="email" class="form-label">Email</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="<?= ($data->email) ?? '' ?>"
                              placeholder="john.doe@example.com"
                            />
                          </div>                          
                          <div class="mb-3 ">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">ID (+62)</span>
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                value="<?= ($data->phoneNumber) ?? '' ?>"
                                placeholder="202 555 0111"
                              />
                            </div>
                          </div>
                          <div class="mb-3 ">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= ($data->address) ?? '' ?>" placeholder="Jl. Semeru 3 No.11" />
                          </div>
                          <div class="mb-3 ">
                            <label for="address" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="address" name="kota" value="<?= ($data->kota) ?? '' ?>" placeholder="Bogor" />
                          </div>
                          <div class="mb-3 ">
                            <label for="address" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="address" name="provinsi" value="<?= ($data->provinsi) ?? '' ?>"  placeholder="Jawa Barat" />
                          </div>
                          <div class="mb-3 ">
                            <label for="zipCode" class="form-label">Kode Pos</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              value="<?= ($data->zipCode) ?? '' ?>"
                              placeholder="18490"
                              maxlength="5"
                            />
                          </div>
                          
                          <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                value="<?= ($data->password) ?? '' ?>"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required/>
                    <label class="form-check-label" for="terms-conditions">
                      Saya telah menyetujui
                      <a href="javascript:void(0);">Ketentuan Privasi</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>Sudah Memiliki Akun?</span>
                <a href="/authlogin">
                  <span>Masuk Sekarang</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
