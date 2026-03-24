document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".custom-form").forEach((form) => {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      let isValid = true;

      const name = form.querySelector('[name="name"]');
      const phone = form.querySelector('[name="phone"]');

      const successMsg = form.querySelector(".success-msg");

      // reset
      form.querySelectorAll(".error").forEach((el) => (el.textContent = ""));
      if (successMsg) successMsg.textContent = "";

      // validation
      if (!name.value.trim() || name.value.trim().length < 3) {
        showError(name, "Enter valid name");
        isValid = false;
      }

      if (!/^[6-9]\d{9}$/.test(phone.value.trim())) {
        showError(phone, "Enter valid 10-digit phone");
        isValid = false;
      }

      if (!isValid) return;

      let formData = new FormData(form);
      formData.append("action", "send_form");

      fetch(ajax_object.ajax_url, {
        method: "POST",
        body: formData,
      })
        .then((res) => res.text())
        .then((data) => {
          if (successMsg) {
            successMsg.textContent = "Form submitted successfully!";
          }
          form.reset();
        })
        .catch((err) => {
          console.error("Error:", err);
        });
    });
  });
});

function showError(input, message) {
  let error = input.parentElement.querySelector(".error");
  if (error) {
    error.textContent = message;
  }
}
