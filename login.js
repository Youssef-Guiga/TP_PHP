function show() {
    console.log("aaaaaaaaaaaaa");
    var passwordInput = document.getElementById("password");
        var eyeIcon = document.querySelector(".show-hide");
        
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          eyeIcon.setAttribute("name", "eye-off-outline");
        } else {
          passwordInput.type = "password";
          eyeIcon.setAttribute("name", "eye-outline");
        }
  }