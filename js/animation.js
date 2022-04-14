let modalLogin = document.getElementById("staticBackdropLogin");
let closeLogin = document.getElementById("close-login");
let modalRegister = document.getElementById("staticBackdropRegister");
let closeRegister = document.getElementById("close-register");

let CloseModalFunction = function(a, b)
{
    a.addEventListener("click", function()
    {
        b.style.transform = "translateY(50%)";
        setTimeout(() => 
        {
            b.style.transform = "translateY(-100%)";

            setTimeout(() =>
            {
                b.style.transform = "translateY(0)";
            }, 300)
        }, 150)
    });
}

CloseModalFunction(closeLogin, modalLogin);
CloseModalFunction(closeRegister, modalRegister);