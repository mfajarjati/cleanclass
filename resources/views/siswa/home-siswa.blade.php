@extends('siswa/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        {{-- <div class="head-title">
            <div class="left">
                <h1>Over<em>view</em></h1>
                </ul>
            </div>
        </div> --}}

        <ul class="box-info">
            <li>
                <i class='bx bxs-user'></i>
                <span class="text">
                    <h3>Wali Kelas</h3>
                    <p>Wildan Tisna Surya M.T.</p>
                </span>
            </li>
            {{-- <li>
                <i class='bx bxs-door-open'></i>
                <span class="text">
                    <h3>Kelas</h3>
                    <p>7B</p>
                </span>
            </li> --}}
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
            <div class="order">
                <div class="head">
                    <h3>Laporan</h3>
                    <a href="#" class="btn-download">
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
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 26 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-x-circle'></i>
                            </td>
                            <td><span class="status pending">Tidak Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 19 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 12 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 5 Februari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Leaderboard</h3>
                    <a href="#" class="btn-download">
                        <span class="text">See all</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <ul class="todo-list">
                    <li class="juara1">
                        <i class="las la-trophy"></i>
                        <p>Kelas 7B</p>
                        <a href="#" class="btn-download">
                            <span class="text">500 point</span>
                        </a>
                    </li>
                    <li class="juara2">
                        <i class="las la-medal"></i>
                        <p>Kelas 8B</p>
                        <a href="#" class="btn-download">
                            <span class="text">480 point</span>
                        </a>
                    </li>
                    <li class="juara3">
                        <i class="las la-award"></i>
                        <p>Kelas 9A</p>
                        <a href="#" class="btn-download">
                            <span class="text">460 point</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
