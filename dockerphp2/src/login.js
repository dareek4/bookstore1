const chooseLogin = document.querySelector(".chooseLogin");
const chooseRegister = document.querySelector(".chooseRegister");
const register = document.querySelector(".register");
const login = document.querySelector(".login");


chooseLogin.addEventListener("click", () => {
    login.classList.remove("hide");
    register.classList.add("hide");
    chooseLogin.classList.add("active");
    chooseRegister.classList.remove("active");
})

chooseRegister.addEventListener("click", () => {
    login.classList.add("hide");
    register.classList.remove("hide");
    chooseRegister.classList.add("active");
    chooseLogin.classList.remove("active");
})