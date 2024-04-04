/*===== FOCUS =====*/
const inputs = document.querySelectorAll(".form__input");
document
    .getElementById("show_eye")
    .addEventListener("click", password_show_hide);
document
    .getElementById("hide_eye")
    .addEventListener("click", password_show_hide);

function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

/*=== Add focus ===*/
function addfocus() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}

/*=== Remove focus ===*/
function remfocus() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

/*=== To call function===*/
inputs.forEach((input) => {
    input.addEventListener("focus", addfocus);
    input.addEventListener("blur", remfocus);
});
