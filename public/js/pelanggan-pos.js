document.querySelectorAll(".pelangganOption").forEach((button) => {
    button.addEventListener("click", function () {
        const namaPelanggan = this.getAttribute("data-nama");

        // Tampilkan elemen namaPelanggan dan sembunyikan pelangganButton
        document.getElementById("namaPelanggan").classList.remove("hidden");
        document.getElementById("pelangganButton").classList.add("hidden");

        // Ubah teks di label untuk menampilkan pilihan yang dipilih
        document.getElementById(
            "labelNamaPelanggan"
        ).textContent = `Nama Pelanggan : ${namaPelanggan}`;
    });
});

// Mengubah teks label berdasarkan pilihan dari pelangganOptionEdit
document.querySelectorAll(".pelangganOptionEdit").forEach((button) => {
    button.addEventListener("click", function () {
        const namaPelanggan = this.getAttribute("data-nama");

        // Ubah teks di label untuk menampilkan pilihan yang dipilih dari edit dropdown
        document.getElementById(
            "labelNamaPelanggan"
        ).textContent = `Nama Pelanggan : ${namaPelanggan}`;
    });
});
