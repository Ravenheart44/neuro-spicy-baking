// Handle popup on form submit
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Stop default submission
    document.getElementById("popup").style.display = "flex";
    form.reset(); // Optionally clear the form
  });
});

function closePopup() {
  document.getElementById("popup").style.display = "none";
}
