function Close() {
    let card = document.querySelector(".closeTab");
    card.style.display = "none";
}

//-----------This is for regular form validation---------//
let form = document.querySelector(".subtForm");
let pass = document.querySelector(".pass");
let regex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&^])[A-Za-z\d@.#$!%*?&]{8,15}$/;

let passwordInvalid = document.querySelector(".passFeed");

if (pass) {
    pass.addEventListener("input", () => {
        let result = regex.test(pass.value);
        //-----------Checking condition-------//
        if (result == false) {
            passwordInvalid.style.display = "block";
        } else {
            passwordInvalid.style.display = "none";
        }
    });
}

if (form) {
    form.addEventListener("submit", (e) => {
        let result = regex.test(pass.value);
        //------------Form check value--------------//
        if (form.checkValidity() == false || result == false) {
            e.preventDefault();
            e.stopPropagation();

            //----Adding invalid feedback to form----//
            form.classList.add("was-validated");

            if (result == false) {
                passwordInvalid.style.display = "block";
            }
        } else {
            form.submit();
        }
    });
}

// ------------------This is fetch function for manufacturers lists display---------//
document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/Manufacturers")
        .then((res) => {
            return res.json();
        })
        .then((res) => {
            let menuLists = document.querySelector(".manuLists");

            res.forEach((manu) => {
                let row = document.createElement("tr");
                row.innerHTML = `<td>${manu.ManufacturerName}</td>
                <td>${manu.ManufacturerEmail}</td>
                <td>${manu.ManufacturerPhoneNo}</td>
                <td>${manu.ManufacturerAddress}</td>
                <td><a href='/get/Manufacturers/${manu.ManufacturerId}'' class="btn btn-primary">Update</a></td>`;
                menuLists.appendChild(row);
            });
        });
});
