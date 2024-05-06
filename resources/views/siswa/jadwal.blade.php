@extends('siswa/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        <div class="head">
            <img src="assets/images/award.png" alt="">
            <h3>Jadwal <em>Piket</em></h3>
            <img src="assets/images/award.png" alt="">
        </div>
        <section class="jadwal">
            <div class="container">
                <div class="jadwal-main">
                    <div class="row">

                        <!-- basic table start -->
                        <div class="jadwal-piket style-1">
                            <div class="piket-table-header">
                                <h3>Senin</h3>
                            </div>
                            <div class="piket-hari-siswa">
                                <ul class="piket">
                                    {{-- nama yang piket senin --}}
                                    <li>Alambana Habibi</li>
                                    <li>Almira Mandasari</li>
                                    <li>Anggabaya Santoso</li>
                                    <li>Bakianto Agustina</li>
                                    <li>Cakrabirawa Anggraini</li>
                                </ul>
                            </div>
                        </div>
                        <!-- basic table end -->

                        <!-- standard table start -->
                        <div class="jadwal-piket style-2">
                            <div class="piket-table-header">
                                <h3>Selasa</h3>
                            </div>
                            <div class="piket-hari-siswa">
                                <ul class="piket">
                                    <li>Dalimin Wastuti</li>
                                    <li>Darsirah Saputra</li>
                                    <li>Dian Mandala</li>
                                    <li>Dono Permata</li>
                                    <li>Elvina Sitompulan</li>
                                </ul>
                            </div>
                        </div>
                        <!-- standard table end -->

                        <!-- premium table start -->
                        <div class="jadwal-piket style-3">
                            <div class="piket-table-header">
                                <h3>Rabu</h3>
                            </div>
                            <div class="piket-hari-siswa">
                                <ul class="piket">
                                    <li>Firda Rosela Sundari</li>
                                    <li>Gamanto Simanjuntak</li>
                                    <li>Humaira Waluyo</li>
                                    <li>Jinawi Setiawan</li>
                                    <li>Kani Nuraini</li>
                                </ul>
                            </div>
                        </div>
                        <!-- premium table end -->

                        <!-- premium table start -->
                        <div class="jadwal-piket style-4">
                            <div class="piket-table-header">
                                <h3>Kamis</h3>
                            </div>
                            <div class="piket-hari-siswa">
                                <ul class="piket">
                                    <li>Makuta Suryatmi</li>
                                    <li>Michelle Safitri</li>
                                    <li>Oliva Narpati</li>
                                    <li>Prayitna Purwanti</li>
                                    <li>Puput Prasasta</li>
                                </ul>
                            </div>
                        </div>
                        <!-- premium table end -->

                        <!-- premium table start -->
                        <div class="jadwal-piket style-5">
                            <div class="piket-table-header">
                                <h3>Jum'at</h3>
                            </div>
                            <div class="piket-hari-siswa">
                                <ul class="piket">
                                    <li>Qori Maheswara</li>
                                    <li>Raina Yuliarti</li>
                                    <li>Vanya Winarsih</li>
                                    <li>Yani Hidayanto</li>
                                    <li>Zizi Suartini</li>
                                </ul>
                            </div>
                        </div>
                        <!-- premium table end -->

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
