<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    @yield('content')
    <section class="header">
        <h1>SURAT PERNYATAAN MENDUDUKI JABATAN</h1>
    </section>
    <section class="edit-content">
        <div class="container">
            <div class="row">
                <form class="col-lg-12" action="{{ route('SuratMendudukiJabatan.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Nomor Surat Pernyataan</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Nomor Surat"
                                aria-label="default input example" name="nomor_surat_pernyataan">
                        </div>
                        <div class="col-lg-6">
                            <h2>Nama Penanda Tangan</h2>
                            <input class="form-control" type="text"
                                placeholder="Silahkan Masukan Nama Penanda Tangan" aria-label="default input example"
                                name="nama_penanda_tangan">
                        </div>
                        <div class="col-lg-6">
                            <h2>Jabatan Penanda Tangan</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Jabatan"
                                aria-label="default input example" name="jabatan_penanda_tangan">
                        </div>
                        <div class="col-lg-6">
                            <h2>Nama Pemohon</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Nama"
                                aria-label="default input example" name="nama_yang_menyatakan">
                        </div>
                        <div class="col-lg-6">
                            <h2>Nomor NIP Pemohon</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Nomor NIP"
                                aria-label="default input example" name="nip">
                        </div>
                        <div class="col-lg-6">
                            <h2>Pangkat</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Pangkat"
                                aria-label="default input example" name="pangkat">
                        </div>
                        <div class="col-lg-6">
                            <h2>Golongan</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Golongan"
                                aria-label="default input example" name="golongan">
                        </div>
                        <div class="col-lg-6">
                            <h2>Jabatan Pemohon</h2>
                            <input class="form-control" type="text" placeholder="Silahkan Masukan Jabatan Pemohon"
                                aria-label="default input example" name="jabatan_yang_menyatakan">
                        </div>
                        <div class="col-lg-6">
                            <h2>Nomor Surat Keputusan</h2>
                            <input class="form-control" type="text"
                                placeholder="Silahkan Masukan Nomor Surat Keputusan" aria-label="default input example"
                                name="nomor_sk">
                        </div>
                        <div class="col-lg-6 ">
                            <h2>Waktu Terbit</h2>
                            <input class="form-control bi bi-calendar-date" type="datetime-local"
                                placeholder="Silahkan Masukan Tanggal Terbit" aria-label="default input example"
                                name="tanggal_penulisan">
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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]", {});
</script>

</html>
