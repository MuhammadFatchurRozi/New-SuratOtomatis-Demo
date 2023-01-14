<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>

    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    @yield('content')
    <section class="header">
        <h1>SURAT PENGUNDURAN DIRI</h1>
    </section>
    <section class="edit-content">
        <div class="container">
            <div class="row">
                <form class="col-lg-12" action="{{ route('SuratPengunduranDiri.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Nama Lengkap</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Nama"
                                aria-label="default input example" name="nama_lengkap" required>
                        </div>
                        <div class="col-lg-6">
                            <h2>Nama Perusahaan</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Nama Perusahaan"
                                aria-label="default input example" name="nama_perusahaan" required>
                        </div>
                        <div class="col-lg-6">
                            <h2>Jabatan</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Jabatan"
                                aria-label="default input example" name="jabatan" required>
                        </div>
                        <div class="col-lg-6">
                            <h2>Tanggal Pengunduran</h2>
                            <input class="form-control" type="datetime-local"
                                placeholder="Silahkan Masukan Tanggal Pengunduran" aria-label="default input example"
                                name="tanggal_pengunduran" required>
                        </div>
                        <div class="col-lg-6">
                            <h2>Penerima Surat</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Penerima Surat"
                                aria-label="default input example" name="penerima_surat" required>
                        </div>
                        <div class="col-lg-6">
                            <h2>Tempat penerbit</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Tempat Terbit"
                                aria-label="default input example" name="tempat_penerbit" required>
                        </div>
                        <div class="col-lg-6 ">
                            <h2>Waktu Terbit</h2>
                            <input class="form-control bi bi-calendar-date" type="datetime-local"
                                placeholder="Silahkan Masukan tanggal terbit" aria-label="default input example"
                                name="waltu_terbitan" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/autoclosepesan.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>\
<script>
    flatpickr("input[type=datetime-local]", {});
</script>

</html>
