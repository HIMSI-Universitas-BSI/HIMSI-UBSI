document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    if (toggle && menu) {
        // Toggle menu on click
        toggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth >= 1024) {
                menu.classList.remove("hidden");
            } else {
                menu.classList.add("hidden");
            }
        });
    }
});

// Navbar shadow saat scroll
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 10) {
        navbar.classList.add(
            "bg-white/75",
            "shadow-md",
            "border-b-2",
            "border-gray-400"
        );
    } else {
        navbar.classList.remove(
            "bg-white/75",
            "shadow-md",
            "border-b-2",
            "border-gray-300"
        );
    }
});
