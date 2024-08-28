function switchTab(tab) {
    // Hide all content
    document.getElementById("content-all").style.display = "none";
    document.getElementById("content-medicine").style.display = "none";
    document.getElementById("content-tools").style.display = "none";

    // Update tab button styles
    document
        .getElementById("tab-all")
        .classList.remove(
            "bg-white",
            "border-bg",
            "text-dark-gray",
            "shadow-sm"
        );
    document
        .getElementById("tab-medicine")
        .classList.remove(
            "bg-white",
            "border-bg",
            "text-dark-gray",
            "shadow-sm"
        );
    document
        .getElementById("tab-tools")
        .classList.remove(
            "bg-white",
            "border-bg",
            "text-dark-gray",
            "shadow-sm"
        );

    document
        .getElementById("tab-" + tab)
        .classList.add("bg-white", "border-bg", "text-dark-gray", "shadow-sm");

    // Show selected content with AJAX call
    let contentDiv = document.getElementById("content-" + tab);
    contentDiv.style.display = "block";

    // Fetch data for the selected tab
    fetch(`/stock/${tab}`)
        .then((response) => response.text())
        .then((html) => {
            contentDiv.innerHTML = html;
        })
        .catch((error) => console.error("Error loading tab content:", error));
}

// Default to showing the 'all' tab
switchTab("all");
