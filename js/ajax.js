document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");

  if (!form) {
    console.log("Form not found");
    return;
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    console.log("Form submitted"); // DEBUG

    let formData = new FormData(form);
    formData.append("action", "send_form");

    fetch(ajax_object.ajax_url, {
      method: "POST",
      body: formData,
    })
      .then((res) => res.text())
      .then((data) => {
        console.log("Response:", data);

        const successMsg = form.querySelector(".success-msg");

        if (data === "success") {
          successMsg.textContent = "Form submitted successfully!";
          form.reset();
        } else {
          successMsg.textContent = "Error sending form";
        }
      })
      .catch((err) => {
        console.error("Fetch error:", err);
      });
  });
});
