document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  const formMessage = document.getElementById("formMessage");
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    if (name && email && message) {
      formMessage.textContent = "Thank you for contacting us, " + name + "!";
      form.reset();
    } else {
      formMessage.textContent = "Please fill in all fields.";
      formMessage.style.color = "red";
    }
  });
});
