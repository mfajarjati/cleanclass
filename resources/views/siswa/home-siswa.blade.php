@extends('siswa/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        <ul class="box-info">
            <li>
                <i class='bx bxs-user'></i>
                <span class="text">
                    <h3>Wali Kelas</h3>
                    <p>Wildan Tisna Surya S.T.</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-medal'></i>
                <span class="text">
                    <h3>Point</h3>
                    <p>20</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-calendar'></i>
                <span class="text">
                    <h3>Berikutnya</h3>
                    <p>Senin, 22 April 2024</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="laporan-home">
                <div class="head">
                    <h3>Laporan</h3>
                    <a href="/laporan" class="btn-see-all">
                        <span class="text">See all</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Senin, 4 Maret 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status piket">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 26 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-x-circle'></i>
                            </td>
                            <td><span class="status tidak piket">Tidak Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 19 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status piket">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 12 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status piket">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 5 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status piket">Piket</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="leaderboard-home">
                <div class="head">
                    <h3>Leaderboard</h3>
                    <a href="/leaderboard" class="btn-see-all">
                        <span class="text">See all</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <ul class="leaderboard-list">
                    <li class="juara1">
                        <i>
                            <img src="assets/images/First.png" alt="">
                        </i>
                        <p>Kelas 7B</p>
                        <a class="btn-leaderboard">
                            <span class="text">500 point</span>
                        </a>
                    </li>
                    <li class="juara2">
                        <i>
                            <img src="assets/images/Second.png" alt="">
                        </i>
                        <p>Kelas 8B</p>
                        <a class="btn-leaderboard">
                            <span class="text">480 point</span>
                        </a>
                    </li>
                    <li class="juara3">
                        <i>
                            <img src="assets/images/Third.png" alt="">
                        </i>
                        <p>Kelas 9A</p>
                        <a class="btn-leaderboard">
                            <span class="text">460 point</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
