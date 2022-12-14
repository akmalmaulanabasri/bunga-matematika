<section class="bg-danger">
        <div class="d-flex align-items-center justify-content-center py-5">
            <div class="col-11">
                <div class="card card-me">
                    <div class="card-head">
                        <h1 class="text-center pt-3">Kalkulator Bunga</h1>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center">Hasil perhitungan Bunga Future Value</h5>
                        <ul class="mt-2">
                            <li>
                                <p>Besar pinjaman awal adalah Rp<?= number_format(@$pa, 0, ',', '.')?></p>
                            </li>
                            <li>
                                <p>Suku bunga yang digunakan adalah <?= @$bunga?>%</p>
                            </li>
                            <li>
                                <p>Jangka waktu adalah <?= @$waktu?> Bulan</p>
                            </li>
                        </ul>
                        <p class="text-center mt-3 bg-dark text-light p-2 rounded">
                            Maka yang harus di bayarkan setelah <?= @$waktu?> bulan dengan bunga <?= @$bunga?>% per bulan adalah sebesar Rp<?= number_format(@$bungaAkhir, 0, ',', '.')?> 
                        </p>

                        <!-- <div class="table-responsive" style="overflow: scroll;">
                            <table class="table border table-stripped">
                                <tr>
                                <td>Angsuran ke -</td>
                                <td>Angsuran Pokok</td>
                                <td>Angsuran Bunga</td>
                                <td>Total Angsuran</td>
                                <td>Sisa Hutang</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Rp 14.943,84</td>
                                    <td>Rp 125,00</td>
                                    <td>Rp 15.068,84</td>
                                    <td>Rp 135.056,16</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rp 14.956,29</td>
                                    <td>Rp 112,55</td>
                                    <td>Rp 15.068,84</td>
                                    <td>Rp 120.099,88</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rp 14.968,75</td>
                                    <td>Rp 100,08</td>
                                    <td>Rp 15.068,84</td>
                                    <td>Rp 105.131,12</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rp 14.981,23</td>
                                    <td>Rp 87,61</td>
                                    <td>Rp 15.068,84</td>
                                    <td>Rp 90.149,90</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rp 14.993,71</td>
                                    <td>Rp 75,12</td>
                                    <td>Rp 15.068,84</td>
                                    <td>Rp 75.156,18</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Rp 15.006,21</td>
                                    <td>Rp 62,63</td>
                                    <td>Rp 15.068,84</td>
                                    <td>Rp 60.149,98</td>
                                </tr>
                            </table>
                        </div> -->

                        <div class="d-flex justify-content-center mt-3">
                            <a href="index.php" class="btn btn-warning">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>