/* Show modal */
const showModal = (openButton, modalContent) => {
    const openBtn = document.getElementById(openButton),
        modalContainer = document.getElementById(modalContent),
        blurBackground = document.querySelector(".blur-background");

    if (openBtn && modalContainer) {
        openBtn.addEventListener("click", () => {
            modalContainer.classList.add("show-modal");
            blurBackground.style.display = "block"; // Tampilkan latar belakang blur
        });
    }
};
showModal("open-modal", "modal-container");

/* Close modal */
const closeBtn = document.querySelectorAll(".close-modal");

function closeModal() {
    const modalContainer = document.getElementById("modal-container"),
        blurBackground = document.querySelector(".blur-background");

    modalContainer.classList.remove("show-modal");
    blurBackground.style.display = "none"; // Sembunyikan latar belakang blur
}

closeBtn.forEach((c) => c.addEventListener("click", closeModal));
