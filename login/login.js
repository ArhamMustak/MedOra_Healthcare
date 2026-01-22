

document.getElementById("myform").addEventListener("submit", function (e) {
    
    document.getElementById("nameError").textContent = "";
    document.getElementById("passwordError").textContent = "";

    const email = document.getElementById("name").value.trim();
    const password = document.getElementById("password").value;

    let valid = true;

    
    if (!email.includes("@")) {
        document.getElementById("nameError").textContent = "Enter a valid email";
        valid = false;
    }

    if (password.length < 6) {
        document.getElementById("passwordError").textContent = "Password must be at least 6 characters";
        valid = false;
    }

    
    if (!valid) {
        e.preventDefault();
    }
});

