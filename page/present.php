<section class="bg-danger" style="width: 100vw; height: 100vh;">
        <div class="d-flex align-items-center justify-content-center" style="width: 100vw; height: 100vh;">
            <div class="col-11">
                <div class="card card-me">
                    <div class="card-head">
                        <h1 class="text-center pt-3">Kalkulator Bunga</h1>
                        <h3 class="text-center">Present Value</h3>
                    </div>
                    <div class="card-body">
                    <form action="index.php?hitung=present" method="post" class="form-group">
                            <label for="pinjaman" class="form-label">Besar Pinjaman</label>
                            <input required type="number" name="pinjaman" id="pinjaman" placeholder="Pinjaman Akhir" class="form-control">

                            <label for="Bunga" class="form-label mt-3">Bunga Pinjaman</label>
                            <input required type="number" name="bunga" id="bunga" placeholder="Bunga dalam desimal" class="form-control">

                            <label for="jangka" class="form-label mt-3">Jangka Waktu</label>
                            <input required type="number" name="waktu" id="waktu" placeholder="Jangka waktu dalam bulan" class="form-control">

                            <label for="tipe" class="form-label mt-3">Tipe Bunga</label>
                            <select name="tipe" id="tipe" class="form-control">
                                <option value="" selected disabled hidden>Pilih...</option>
                                <option value="tunggal">Bunga Tunggal</option>
                                <option value="majemuk">Bunga Majemuk</option>
                            </select>

                            <input type="submit" value="Hitung Hasil" class="btn btn-danger mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>