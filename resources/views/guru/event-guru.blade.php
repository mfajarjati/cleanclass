@extends('guru/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        <div class="head">
            <img src="assets/images/award.png" alt="">
            <h3>Kegiatan <em>Sekolah</em></h3>
            <img src="assets/images/award.png" alt="">
        </div>
        <section class="event">
            <div class="container">
                <div class="event-main">
                    <div class="row">

                        {{-- Event --}}
                        <div class="event-table style-1">

                            {{-- Gambar --}}
                            <div class="event-table-header">
                                <img src="assets/images/bersihsekolah.png" alt="">
                            </div>

                            {{-- judul kegiatan --}}
                            <h3>Pentingnya Menjaga Kebersihan Sekolah</h3>

                            {{-- isi --}}
                            <div class="event-table-body">
                                <p>
                                    Kebersihan di sekolah penting untuk kesehatan dan kenyamanan. Siswa dan staf harus
                                    menjaga kebersihan kelas, kamar mandi, dan area umum. Mencuci tangan secara teratur
                                    diperlukan untuk mencegah penyakit. Dengan lingkungan yang bersih, kita melindungi
                                    kesehatan siswa dan menciptakan lingkungan belajar yang kondusif.
                                </p>

                                {{-- Waktu --}}
                                <div class="btn-event">
                                    <span class="text">Waktu : 22 April 2024</span>
                                </div>
                            </div>
                        </div>


                        <div class="event-table style-1">
                            <div class="event-table-header">
                                <img src="assets/images/kebersihankelas.jpg" alt="">
                            </div>
                            <h3>Wujudkan Kebersihan Kelas yang Sehat</h3>
                            <div class="event-table-body">
                                <p>
                                    Jaga kebersihan kelas untuk kesehatan dan kenyamanan. Dengan lingkungan bersih, siswa
                                    dapat belajar dengan optimal. Ayo bersama-sama rawat kebersihan kelas! Dengan ruang
                                    belajar bersih, kita ciptakan lingkungan nyaman dan sehat. Mari bergandengan tangan
                                    menjaga kebersihan untuk pembelajaran yang lebih baik dan lebih menyenangkan bagi semua!
                                </p>
                                <div class="btn-event">
                                    <span class="text">Waktu : 24 April 2024</span>
                                </div>
                            </div>
                        </div>


                        <div class="event-table style-1">
                            <div class="event-table-header">
                                <img src="assets/images/sampah.jpg" alt="">
                            </div>
                            <h3>Kreasi Mengubah Limbah menjadi Karya</h3>
                            <div class="event-table-body">
                                <p>
                                    Mari berpartisipasi dalam gerakan lingkungan dengan membuat sesuatu dari sampah! Dari
                                    kerajinan tangan hingga karya seni, setiap kreasi membantu menyelamatkan lingkungan.
                                    Mulailah dengan mengumpulkan sampah dan berkreasi. Bersama, kita bisa mengurangi limbah
                                    dan menciptakan dunia yang lebih berkelanjutan!
                                </p>
                                <div class="btn-event">
                                    <span class="text">Waktu : 26 April 2024</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
