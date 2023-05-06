document.getElementById("form-login").addEventListener("submit", (event) => {
  event.preventDefault();

  const users_email = getField("users_email");
  const users_password = getField("users_password");

  const form = new FormData();
  form.append("users_email", users_email.value);
  form.append(
    "users_password",
    CryptoJS.SHA256(users_password.value).toString()
  );

  axios
    .post(`${host}/api/auth/login`, form, {
      headers: {
        "Content-Type": "multipart/form-data",
      },
    })
    .then((res) => {
      console.log(res.data);

      if (res.data.status === "success") {
        window.sessionStorage.setItem("jwt", res.data.data.jwt);
      }
    });
});
