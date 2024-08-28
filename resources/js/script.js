document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formTambahProduk");

    form.addEventListener("submit", function (event) {
        // Mendapatkan semua elemen input
        const inputs = form.querySelectorAll("input[required]");
        let valid = true;

        // Loop untuk memeriksa setiap input
        inputs.forEach((input) => {
            if (!input.value.trim()) {
                valid = false;
                // Menampilkan alert jika input tidak diisi
                alert(
                    `Field "${input.previousElementSibling.textContent}" tidak boleh kosong.`
                );
                input.focus(); // Mengarahkan fokus pada input yang tidak diisi
            }
        });

        // Jika ada input yang tidak diisi, mencegah form untuk disubmit
        if (!valid) {
            event.preventDefault(); // Mencegah pengiriman form
        }
    });
});
