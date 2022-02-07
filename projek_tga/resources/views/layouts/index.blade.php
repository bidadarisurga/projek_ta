<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

   @include('includes.style')

    <title>Dashboard</title>
  </head>
  <body>

    @include('includes.navbar')

    <div class="container">
      <div class="mt-5">
        <h1 class="text-center">
          SISTEM IDENTIFIKASI KUALITAS DAGING KAMBING BERDASARKAN TEKSTUR DAN WARNA MENGGUNAKAN METODE SUPPORT VERCTOR MACHINE
          (SVM)
        </h1>
      </div>
        <br>
        <div class="mx-auto">
            <div class="col-xl-4 col-md-6 mb-4 d-inline-block">
                <div class="card border-left-success shadow h-100 py-2 ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 ">Jumlah Data Latih</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 d-inline-block float-end">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pengujian</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


          @include('includes.script')
  </body>
</html>
