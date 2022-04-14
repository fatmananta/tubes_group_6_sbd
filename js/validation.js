// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

let username = document.getElementById("user-name");
let useremail = document.getElementById("user-email");
let userpassword = document.getElementById("user-password");

let setActiveOnFocusOut = function(b)
{
    b.addEventListener("focusout", function()
    {
        if(b.value.length > 0)
        {
            b.classList.add("active");
        }
        else
        {
            b.classList.remove("active")
        }
    });
}

setActiveOnFocusOut(username);
setActiveOnFocusOut(useremail);
setActiveOnFocusOut(userpassword);






