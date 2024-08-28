document.addEventListener("DOMContentLoaded", () => {
    // Cek jika ada pesan error
    const errorMessages = document.querySelectorAll(".text-red-600");
    if (errorMessages.length > 0) {
        // Jika ada error, buka modal
        document.dispatchEvent(
            new CustomEvent("open-modal", { detail: { name: "tambah-produk" } })
        );
    }
});
