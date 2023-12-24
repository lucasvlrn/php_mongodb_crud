var password = document.getElementById("password");
var img = document.getElementById("eye");

eye.addEventListener("click", function () {
  if (password.value != "") {
    verifyPassword();
  } else {
    imageSet();
  }
});

const verifyPassword = () => {
  if (password.type == "password") {
    password.type = "text";
    eye.src = "../assets/images/eye-slash.svg";
  } else {
    password.type = "password";
    eye.src = "../assets/images/eye.svg";
  }
};

const imageSet = () => {
  eye.src = "../assets/images/eye.svg";
};
