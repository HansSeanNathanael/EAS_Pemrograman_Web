$(document).ready(function() {

    let inputTanggalLahir = document.getElementById("input-tanggal-lahir");
    inputTanggalLahir.addEventListener("focusin", function() {
        if (this.type != "date") {
            this.type = "date";
        }
    });
    inputTanggalLahir.addEventListener("focusout", function() {
        if (this.value == "") {
            this.type = "text";
        }
    });

});