document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.createElement("button");
    toggleButton.innerText = "Toggle Dark Mode";
    document.body.insertBefore(toggleButton, document.body.firstChild);

    toggleButton.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");
    });
});
