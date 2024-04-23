@extends('siswa/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        <div class="head">
            <img src="assets/images/award.png" alt="">
            <h3>Jadwal <em>Piket</em></h3>
            <img src="assets/images/award.png" alt="">
        </div>
        <section class="pricing">
            <div class="container">
                <div class="pricing-main">
                    <div class="row">

                        <!-- basic table start -->
                        <div class="pricing-table style-1">
                            <div class="pricing-table-header">
                                <h3>Senin</h3>
                            </div>
                            <div class="pricing-table-body">
                                <ul class="monthly-features">
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
                        <div class="pricing-table style-2">
                            <div class="pricing-table-header">
                                <h3>Selasa</h3>
                            </div>
                            <div class="pricing-table-body">
                                <ul class="monthly-features">
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
                        <div class="pricing-table style-3">
                            <div class="pricing-table-header">
                                <h3>Rabu</h3>
                            </div>
                            <div class="pricing-table-body">
                                <ul class="monthly-features">
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
                        <div class="pricing-table style-4">
                            <div class="pricing-table-header">
                                <h3>Kamis</h3>
                            </div>
                            <div class="pricing-table-body">
                                <ul class="monthly-features">
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
                        <div class="pricing-table style-5">
                            <div class="pricing-table-header">
                                <h3>Jum'at</h3>
                            </div>
                            <div class="pricing-table-body">
                                <ul class="monthly-features">
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
