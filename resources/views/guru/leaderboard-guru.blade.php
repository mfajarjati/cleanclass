@extends('guru/.layout')

@section('content')
    <!-- MAIN -->
    <main>
        <div class="head">
            <img src="assets/images/award.png" alt="">
            <h3>Leaderboard</h3>
            <img src="assets/images/award.png" alt="">
        </div>
        <div class="table-data">
            <div class="leader">
                <ul class="leader-list">
                    {{-- juara 1 --}}
                    <li class="juara1">
                        <i>
                            <img src="assets/images/First.png" alt="">
                        </i>
                        <p>Kelas 7B</p>
                        <a class="btn-leader">
                            <span class="text">500 point</span>
                        </a>
                    </li>
                    {{-- juara 2 --}}
                    <li class="juara2">
                        <i>
                            <img src="assets/images/Second.png" alt="">
                        </i>
                        <p>Kelas 8B</p>
                        <a class="btn-leader">
                            <span class="text">480 point</span>
                        </a>
                    </li>
                    {{-- juara 3 --}}
                    <li class="juara3">
                        <i>
                            <img src="assets/images/Third.png" alt="">
                        </i>
                        <p>Kelas 9A</p>
                        <a class="btn-leader">
                            <span class="text">460 point</span>
                        </a>
                    </li>
                    {{-- juara 4 --}}
                    <li class="juara">
                        <i>
                            <img src="assets/images/four.png" alt="">
                        </i>
                        <p>Kelas 7A</p>
                        <a class="btn-leader">
                            <span class="text">450 point</span>
                        </a>
                    </li>
                    {{-- juara 5 --}}
                    <li class="juara">
                        <i>
                            <img src="assets/images/five.png" alt="">
                        </i>
                        <p>Kelas 9B</p>
                        <a class="btn-leader">
                            <span class="text">400 point</span>
                        </a>
                    </li>
                    {{-- juara 6 --}}
                    <li class="juara">
                        <i>
                            <img src="assets/images/six.png" alt="">
                        </i>
                        <p>Kelas 8A</p>
                        <a class="btn-leader">
                            <span class="text">380 point</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
