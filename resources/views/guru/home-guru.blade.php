@extends('guru/.layout')

@section('content')
    <!-- MAIN -->
    <main>

        {{-- 3 kotak diatas --}}
        <ul class="box-info">
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>Siswa</h3>
                    <p>25</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-door-open'></i>
                <span class="text">
                    <h3>Kelas</h3>
                    <p>7B</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-medal'></i>
                <span class="text">
                    <h3>Point</h3>
                    <p>500</p>
                </span>
            </li>
        </ul>

        {{-- tabel-tabel --}}
        <div class="table-data">

            {{-- tabel laporan --}}
            <div class="laporan-home">

                {{-- header dan title tabel leaderboard --}}
                <div class="head">
                    <h3>Laporan</h3>
                    <a href="/laporan-guru" class="btn-see-all">
                        <span class="text">See all</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- list laporan siswa dan pointnya --}}
                        <tr>
                            <td>
                                <p>2373927734</p>
                            </td>
                            <td>
                                <p>Alambana Habibi</p>
                            </td>
                            <td>
                                <a class="btn-laporan">
                                    <span class="text">20 point</span>

                                </a>
                            </td>
                        </tr>

                        {{-- list laporan siswa dan pointnya --}}
                        <tr>
                            <td>
                                <p>2369430584</p>
                            </td>
                            <td>
                                <p>Almira Mandasari</p>
                            </td>
                            <td>
                                <a class="btn-laporan">
                                    <span class="text">20 point</span>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>2382437699</p>
                            </td>
                            <td>
                                <p>Anggabaya Santoso</p>
                            </td>
                            <td>
                                <a class="btn-laporan">
                                    <span class="text">20 point</span>

                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>2384498434</p>
                            </td>
                            <td>
                                <p>Bakiyanto Agustina</p>
                            </td>
                            <td>
                                <a class="btn-laporan">
                                    <span class="text">20 point</span>

                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>2342057333</p>
                            </td>
                            <td>
                                <p>Cakrabirawa Anggraini</p>
                            </td>
                            <td>
                                <a class="btn-laporan">
                                    <span class="text">20 point</span>

                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- tabel leaderboard --}}
            <div class="leaderboard-home">

                {{-- header dan title tabel leaderboard --}}
                <div class="head">
                    <h3>Leaderboard</h3>
                    <a href="/leaderboard-guru" class="btn-see-all">
                        <span class="text">See all</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <ul class="leaderboard-list">

                    {{-- list leaderboard kelas dan pointnya --}}
                    <li class="juara1">
                        <i>
                            <img src="assets/images/First.png" alt="">
                        </i>
                        <p>Kelas 7B</p>
                        <a class="btn-leaderboard">
                            <span class="text">500 point</span>
                        </a>
                    </li>

                    {{-- list leaderboard kelas dan pointnya --}}
                    <li class="juara2">
                        <i>
                            <img src="assets/images/Second.png" alt="">
                        </i>
                        <p>Kelas 8B</p>
                        <a class="btn-leaderboard">
                            <span class="text">480 point</span>
                        </a>
                    </li>

                    {{-- list leaderboard kelas dan pointnya --}}
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
