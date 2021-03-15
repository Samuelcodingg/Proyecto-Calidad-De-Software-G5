const loginBtn = document.querySelectorAll(".login-btn"),
    registerBtn = document.querySelectorAll(".register-btn"),
    lostPassBtn = document.querySelectorAll(".lost-pass-btn"),
    box = document.querySelector(".box"),
    loginForm = document.querySelector(".login-form"),
    registerForm = document.querySelector(".register-form"),
    lostPasswordForm = document.querySelector(".lost-password-form");

registerBtn.forEach((btn) =>{
    btn.addEventListener("click",() =>{
        box.classList.add("slide-active");
        registerForm.classList.remove("form-hidden");
        loginForm.classList.add("form-hidden");
        lostPasswordForm.classList.add("form-hidden");
    });
});

loginBtn.forEach((btn) =>{
    btn.addEventListener("click",() =>{
        box.classList.remove("slide-active");
        registerForm.classList.add("form-hidden");
        loginForm.classList.remove("form-hidden");
        lostPasswordForm.classList.add("form-hidden");
    });
});

lostPassBtn.forEach((btn) =>{
    btn.addEventListener("click",() =>{
        registerForm.classList.add("form-hidden");
        loginForm.classList.add("form-hidden");
        lostPasswordForm.classList.remove("form-hidden");
    });
});
