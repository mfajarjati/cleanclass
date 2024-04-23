@extends('siswa/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        <div class="head">
            <img src="assets/images/award.png" alt="">
            <h3>Laporan</h3>
            <img src="assets/images/award.png" alt="">

        </div>
        <div class="table-laporan">
            <div class="order">
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
                        <tr>
                            <td>
                                <p>Senin, 29 Januari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 22 Januari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-x-circle'></i>
                            </td>
                            <td><span class="status pending">Tidak Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 15 Januari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Senin, 8 Januari 2024</p>
                            </td>
                            <td>
                                <i class='bx bxs-check-circle'></i>
                            </td>
                            <td><span class="status completed">Piket</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
