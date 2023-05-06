const host = "http://127.0.0.1:8000";
const getField = (id) => document.getElementById(id);
const getToken = () => window.sessionStorage.getItem("jwt");

const decode_jwt = (jwt) => {
  const base64Url = jwt.split(".")[1];
  const base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");

  const jsonPayload = decodeURIComponent(
    window
      .atob(base64)
      .split("")
      .map((c) => {
        return "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2);
      })
      .join("")
  );

  return JSON.parse(jsonPayload);
};
