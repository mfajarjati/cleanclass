function eventClick() {
    var confirmation = confirm("Apakah Anda yakin?");
    if (confirmation) {
        const button = document.querySelector(".btn-download3");
        button.classList.add("clicked");
        button.querySelector(".text").textContent = "Sudah mengikuti";
        button.disabled = true;
    }
}

function confirmSubmit(submitButtonId) {
    // Minta konfirmasi dari pengguna
    var confirmation = confirm("Apakah Anda yakin?");

    // Jika pengguna menekan OK pada konfirmasi
    if (confirmation) {
        // Mengambil tombol submit yang bersangkutan
        const submitButton = document.getElementById(submitButtonId);

        // Mengambil parent dari tombol submit
        const pricingTable = submitButton.closest(".pricing-table");

        // Mengambil radio di dalam parent pricingTable
        const radios = pricingTable.querySelectorAll('input[type="radio"]');

        // Menonaktifkan radio di dalam parent pricingTable
        radios.forEach(function (radio) {
            radio.disabled = true;
        });

        // Mengubah tampilan tombol submit
        submitButton.querySelector(".text").textContent = "Sudah submit";
        submitButton.classList.add("clicked");
        submitButton.disabled = true;
    }
    return confirmation;
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

// sidebar
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
    // Hapus class 'active' dari semua link sidebar
    var sidebarLinks = document.querySelectorAll("#sidebar ul.side-menu li");
    sidebarLinks.forEach(function (link) {
        link.classList.remove("active");
    });

    // Tambahkan class 'active' pada link yang diklik (link Home)
    this.parentElement.classList.add("active");
});

// Tambahkan event listener untuk menangani klik pada link sidebar leaderboard
document
    .getElementById("sidebar-leaderboard")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link leaderboard)
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-leaderboard-guru")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link leaderboard)
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-laporan")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link Home)
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-laporan-guru")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link Home)
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-jadwal")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link Home)
        this.parentElement.classList.add("active");
    });

document
    .getElementById("sidebar-jadwal-guru")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link Home)
        this.parentElement.classList.add("active");
    });

document.getElementById("sidebar-event").addEventListener("click", function () {
    // Hapus class 'active' dari semua link sidebar
    var sidebarLinks = document.querySelectorAll("#sidebar ul.side-menu li");
    sidebarLinks.forEach(function (link) {
        link.classList.remove("active");
    });

    // Tambahkan class 'active' pada link yang diklik (link Home)
    this.parentElement.classList.add("active");
});

document
    .getElementById("sidebar-event-guru")
    .addEventListener("click", function () {
        // Hapus class 'active' dari semua link sidebar
        var sidebarLinks = document.querySelectorAll(
            "#sidebar ul.side-menu li"
        );
        sidebarLinks.forEach(function (link) {
            link.classList.remove("active");
        });

        // Tambahkan class 'active' pada link yang diklik (link Home)
        this.parentElement.classList.add("active");
    });
