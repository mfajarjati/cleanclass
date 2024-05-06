@extends('guru/.layout')

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


                        {{-- nama yang piket senin --}}
                        <div class="jadwal-piket style-1">
                            <div class="piket-table-header">
                                <h3>Senin</h3>
                            </div>
                            <div class="piket-hari-guru">
                                <ul class="piket">

                                    {{-- anggota 1 senin --}}
                                    <li>
                                        <label for="senin">Alambana Habibi</label>
                                        <div class="radio-input">

                                            {{-- hadir piket --}}
                                            <input checked="" value="piket" name="Alambana Habibi"
                                                id="Alambana Habibi_color-1" type="radio">
                                            <label for="Alambana Habibi_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732" id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            {{-- tidak hadir piket --}}
                                            <input value="tidak" name="Alambana Habibi" id="Alambana Habibi_color-2"
                                                type="radio">
                                            <label for="Alambana Habibi_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>

                                    {{-- anggota 2 senin --}}
                                    <li><label for="senin">Almira Mandasari</label>
                                        <div class="radio-input">

                                            {{-- hadir piket --}}
                                            <input checked="" value="piket" name="Almira Mandasari"
                                                id="Almira Mandasari_color-1" type="radio">
                                            <label for="Almira Mandasari_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732" id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            {{-- tidak hadir piket --}}
                                            <input value="tidak" name="Almira Mandasari" id="Almira Mandasari_color-2"
                                                type="radio">
                                            <label for="Almira Mandasari_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>


                                    <li><label for="senin">Anggabaya Santoso</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Anggabaya Santoso"
                                                id="Anggabaya Santoso_color-1" type="radio">
                                            <label for="Anggabaya Santoso_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Anggabaya Santoso" id="Anggabaya Santoso_color-2"
                                                type="radio">
                                            <label for="Anggabaya Santoso_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>


                                    <li><label for="senin">Bakianto Agustina</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Bakianto Agustina"
                                                id="Bakianto Agustina_color-1" type="radio">
                                            <label for="Bakianto Agustina_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Bakianto Agustina" id="Bakianto Agustina_color-2"
                                                type="radio">
                                            <label for="Bakianto Agustina_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li><label for="">Cakrabirawa Anggraini</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Cakrabirawa Anggraini"
                                                id="Cakrabirawa Anggraini_color-1" type="radio">
                                            <label for="Cakrabirawa Anggraini_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Cakrabirawa Anggraini"
                                                id="Cakrabirawa Anggraini_color-2" type="radio">
                                            <label for="Cakrabirawa Anggraini_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <button class="btn-submit" onclick="return confirmSubmit('btn-submit-senin');"
                                        id="btn-submit-senin">
                                        <span class="text">Submit</span>
                                    </button>
                                </ul>
                            </div>
                        </div>


                        {{-- nama yang piket selasa --}}
                        <div class="jadwal-piket style-2">
                            <div class="piket-table-header">
                                <h3>Selasa</h3>
                            </div>
                            <div class="piket-hari-guru">
                                <ul class="piket">
                                    <li><label for="">Dalimin Wastuti</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Dalimin Wastuti"
                                                id="Dalimin Wastuti_color-1" type="radio">
                                            <label for="Dalimin Wastuti_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                            <input value="tidak" name="Dalimin Wastuti" id="Dalimin Wastuti_color-2"
                                                type="radio">
                                            <label for="Dalimin Wastuti_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li><label for="">Darsirah Saputra</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Darsirah Saputra"
                                                id="Darsirah Saputra_color-1" type="radio">
                                            <label for="Darsirah Saputra_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                            <input value="tidak" name="Darsirah Saputra" id="Darsirah Saputra_color-2"
                                                type="radio">
                                            <label for="Darsirah Saputra_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li><label for="">Dian Mandala</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Dian Mandala"
                                                id="Dian Mandala_color-1" type="radio">
                                            <label for="Dian Mandala_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                            <input value="tidak" name="Dian Mandala" id="Dian Mandala_color-2"
                                                type="radio">
                                            <label for="Dian Mandala_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li><label for="">Dono Permata</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Dono Permata"
                                                id="Dono Permata_color-1" type="radio">
                                            <label for="Dono Permata_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                            <input value="tidak" name="Dono Permata" id="Dono Permata_color-2"
                                                type="radio">
                                            <label for="Dono Permata_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li><label for="">Elvina Sitompulan</label>
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Elvina Sitompulan"
                                                id="Elvina Sitompulan_color-1" type="radio">
                                            <label for="Elvina Sitompulan_color-1">
                                                <span id="get-span">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                            <input value="tidak" name="Elvina Sitompulan" id="Elvina Sitompulan_color-2"
                                                type="radio">
                                            <label for="Elvina Sitompulan_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <button class="btn-submit" onclick="return confirmSubmit('btn-submit-selasa');"
                                        id="btn-submit-selasa">
                                        <span class="text">Submit</span>
                                    </button>

                                </ul>
                            </div>
                        </div>


                        {{-- nama yang piket rabu --}}
                        <div class="jadwal-piket style-3">
                            <div class="piket-table-header">
                                <h3>Rabu</h3>
                            </div>
                            <div class="piket-hari-guru">
                                <ul class="piket">
                                    <li>Firda Rosela Sundari
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Firda Rosela Sundari"
                                                id="Firda Rosela Sundari_color-1" type="radio">
                                            <label for="Firda Rosela Sundari_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Firda Rosela Sundari"
                                                id="Firda Rosela Sundari_color-2" type="radio">
                                            <label for="Firda Rosela Sundari_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Gamanto Simanjuntak
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="gamanto simanjuntak"
                                                id="gamanto simanjuntak_color-1" type="radio">
                                            <label for="gamanto simanjuntak_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="gamanto simanjuntak"
                                                id="gamanto simanjuntak_color-2" type="radio">
                                            <label for="gamanto simanjuntak_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Humaira Waluyo
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Humaira Waluyo"
                                                id="Humaira Waluyo_color-1" type="radio">
                                            <label for="Humaira Waluyo_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Humaira Waluyo" id="Humaira Waluyo_color-2"
                                                type="radio">
                                            <label for="Humaira Waluyo_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Jinawi Setiawan
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Jinawi Setiawan"
                                                id="Jinawi Setiawan_color-1" type="radio">
                                            <label for="Jinawi Setiawan_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Jinawi Setiawan" id="Jinawi Setiawan_color-2"
                                                type="radio">
                                            <label for="Jinawi Setiawan_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Kani Nuraini
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Kani Nuraini"
                                                id="Kani Nuraini_color-1" type="radio">
                                            <label for="Kani Nuraini_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Kani Nuraini" id="Kani Nuraini_color-2"
                                                type="radio">
                                            <label for="Kani Nuraini_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <button class="btn-submit" onclick="return confirmSubmit('btn-submit-rabu');"
                                        id="btn-submit-rabu">
                                        <span class="text">Submit</span>
                                    </button>
                                </ul>
                            </div>
                        </div>


                        {{-- nama yang piket kamis --}}
                        <div class="jadwal-piket style-4">
                            <div class="piket-table-header">
                                <h3>Kamis</h3>
                            </div>
                            <div class="piket-hari-guru">
                                <ul class="piket">
                                    <li>Makuta Suryatmi
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Makuta Suryatmi"
                                                id="Makuta Suryatmi_color-1" type="radio">
                                            <label for="Makuta Suryatmi_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Makuta Suryatmi" id="Makuta Suryatmi_color-2"
                                                type="radio">
                                            <label for="Makuta Suryatmi_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Michelle Safitri
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Michelle Safitri"
                                                id="Michelle Safitri_color-1" type="radio">
                                            <label for="Michelle Safitri_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Michelle Safitri" id="Michelle Safitri_color-2"
                                                type="radio">
                                            <label for="Michelle Safitri_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Oliva Narpati
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Oliva Narpati"
                                                id="Oliva Narpati_color-1" type="radio">
                                            <label for="Oliva Narpati_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Oliva Narpati" id="Oliva Narpati_color-2"
                                                type="radio">
                                            <label for="Oliva Narpati_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Prayitna Purwanti
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Prayitna Purwanti"
                                                id="Prayitna Purwanti_color-1" type="radio">
                                            <label for="Prayitna Purwanti_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Prayitna Purwanti" id="Prayitna Purwanti_color-2"
                                                type="radio">
                                            <label for="Prayitna Purwanti_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Puput Prasasta
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Puput Prasasta"
                                                id="Puput Prasasta_color-1" type="radio">
                                            <label for="Puput Prasasta_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Puput Prasasta" id="Puput Prasasta_color-2"
                                                type="radio">
                                            <label for="Puput Prasasta_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <button class="btn-submit" onclick="return confirmSubmit('btn-submit-kamis');"
                                        id="btn-submit-kamis">
                                        <span class="text">Submit</span>
                                    </button>
                                </ul>
                            </div>
                        </div>


                        {{-- nama yang piket jumat --}}
                        <div class="jadwal-piket style-5">
                            <div class="piket-table-header">
                                <h3>Jum'at</h3>
                            </div>
                            <div class="piket-hari-guru">
                                <ul class="piket">
                                    <li>Qori Maheswara
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Qori Maheswara"
                                                id="Qori Maheswara_color-1" type="radio">
                                            <label for="Qori Maheswara_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Qori Maheswara" id="Qori Maheswara_color-2"
                                                type="radio">
                                            <label for="Qori Maheswara_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Raina Yuliarti
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Raina Yuliarti"
                                                id="Raina Yuliarti_color-1" type="radio">
                                            <label for="Raina Yuliarti_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Raina Yuliarti" id="Raina Yuliarti_color-2"
                                                type="radio">
                                            <label for="Raina Yuliarti_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Vanya Winarsih
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Vanya Winarsih"
                                                id="Vanya Winarsih_color-1" type="radio">
                                            <label for="Vanya Winarsih_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Vanya Winarsih" id="Vanya Winarsih_color-2"
                                                type="radio">
                                            <label for="Vanya Winarsih_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Yani Hidayanto
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Yani Hidayanto"
                                                id="Yani Hidayanto_color-1" type="radio">
                                            <label for="Yani Hidayanto_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Yani Hidayanto" id="Yani Hidayanto_color-2"
                                                type="radio">
                                            <label for="Yani Hidayanto_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>Zizi Suartini
                                        <div class="radio-input">
                                            <input checked="" value="piket" name="Zizi Suartini"
                                                id="Zizi Suartini_color-1" type="radio">
                                            <label for="Zizi Suartini_color-1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 12L10.2426 16.2426L18.727 7.75732"
                                                                    id="Vector">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>

                                            <input value="tidak" name="Zizi Suartini" id="Zizi Suartini_color-2"
                                                type="radio">
                                            <label for="Zizi Suartini_color-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                        <g stroke-linejoin="round" stroke-linecap="round"
                                                            id="SVGRepo_tracerCarrier"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g id="Interface / Check">
                                                                <path stroke-linejoin="round" stroke-linecap="round"
                                                                    stroke-width="2" stroke="#ffffff"
                                                                    d="M6 6l12 12m0-12L6 18" id="Vector"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <button class="btn-submit" onclick="return confirmSubmit('btn-submit-jumat');"
                                        id="btn-submit-jumat">
                                        <span class="text">Submit</span>
                                    </button>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
