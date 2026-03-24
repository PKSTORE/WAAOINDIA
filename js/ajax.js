document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(form);
    formData.append("action", "send_form");

    fetch(ajax_object.ajax_url, {
      method: "POST",
      body: formData,
    })
      .then((res) => res.text())
      .then((data) => {
        const successMsg = form.querySelector(".success-msg");

        if (data === "success") {
          successMsg.textContent = "Form submitted successfully!";
          form.reset();
        } else {
          successMsg.textContent = "Something went wrong!";
        }
      })
      .catch((err) => {
        console.error(err);
      });
  });
});
