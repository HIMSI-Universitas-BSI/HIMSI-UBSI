import "./bootstrap";
import "../../public/assets/js/plugins";
import "../../public/assets/js/theme";

document.addEventListener("DOMContentLoaded", () => {
    if (typeof theme !== "undefined") {
        theme.init();
    }
});
