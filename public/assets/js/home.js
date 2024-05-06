function confirmSubmit(submitButtonId) {
    // Minta konfirmasi dari pengguna
    Swal.fire({
        title: "Apakah Anda yakin?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna menekan OK pada konfirmasi
            Swal.fire({
                title: "Berhasi Dimasukkan!",
                icon: "success",
            });

            // Mengambil tombol submit yang bersangkutan
            const submitButton = document.getElementById(submitButtonId);

            // Mengambil parent dari tombol submit
            const jadwalPiket = submitButton.closest(".jadwal-piket");

            // Mengambil radio di dalam parent jadwalPiket
            const radios = jadwalPiket.querySelectorAll('input[type="radio"]');

            // Menonaktifkan radio di dalam parent jadwalPiket
            radios.forEach(function (radio) {
                radio.disabled = true;
            });

            // Mengubah tampilan tombol submit
            submitButton.querySelector(".text").textContent = "Done";
            submitButton.classList.add("clicked");
            submitButton.disabled = true;
        }
    });
}

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");
menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
});
if (window.innerWidth < 768) {
    sidebar.classList.add("hide");
}

// sidebar home siswa dan guru jika aktif
document.getElementById("sidebar-home").addEventListener("click", function () {
    // Hapus class 'active' dari semua link sidebar
    var sidebarLinks = document.querySelectorAll("#sidebar ul.side-menu li");
    sidebarLinks.forEach(function (link) {
        link.classList.remove("active");
    });

    // Tambahkan class 'active' pada link yang diklik (link Home)
    this.parentElement.classList.add("active");
});

document.getElementById("sidebar-guru").addEventListener("click", function () {
    var sidebarLinks = document.querySelectorAll("#sidebar ul.side-menu li");
    sidebarLinks.forEach(function (link) {
        link.classList.remove("active");
    });
    this.parentElement.classList.add("active");
});

// sidebar leaderboard siswa dan guru jika aktif
document
    .getElementById("sidebar-leaderboard")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-leaderboard-guru")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });

// sidebar llaporan siswa dan guru jika aktif
document
    .getElementById("sidebar-laporan")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-laporan-guru")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });

// sidebar jadwal siswa dan guru jika aktif
document
    .getElementById("sidebar-jadwal")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-jadwal-guru")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });

// sidebar event siswa dan guru jika aktif
document.getElementById("sidebar-event").addEventListener("click", function () {
    // Hapus class 'active' dari semua link sidebar
    var sidebarLinks = document.querySelectorAll("#sidebar ul.side-menu li");
    sidebarLinks.forEach(function (link) {
        link.classList.remove("active");
    });
    this.parentElement.classList.add("active");
});

document
    .getElementById("sidebar-event-guru")
    .addEventListener("click", function () {
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });
        this.parentElement.classList.add("active");
    });
