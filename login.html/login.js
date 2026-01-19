document.getElementById("myform").addEventListener("submit", function (e) {
  e.preventDefault();

  let loginEmail = document.getElementById("email").value;
  let loginPassword = document.getElementById("password").value;

  let storedEmail = localStorage.getItem("medoraEmail");
  let storedPassword = localStorage.getItem("medoraPassword");

  if (loginEmail === storedEmail && loginPassword === storedPassword) {
    alert("Login successful!");
    // redirect to dashboard
    window.location.href = "dashboard.html";
  } else {
    alert("Invalid Email or Password!");
  }
});
