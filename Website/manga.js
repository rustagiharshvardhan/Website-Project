function toggleMenu() {
    var menuContent = document.getElementById("menuContent");
    menuContent.classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.btn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
// Add this JavaScript to handle popup opening and closing
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

document.getElementById("buy").addEventListener("click", function () {
    openPopup();
});
// Function to toggle the visibility of the popup
function togglePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = (popup.style.display === "block") ? "none" : "block";
}

// Function to close the popup if user clicks outside of it
window.onclick = function (event) {
    var popup = document.getElementById("popup");
    if (event.target == popup) {
        popup.style.display = "none";
    }
}

function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email.trim() === '') {
        alert('Please enter your email.');
        return false;
    }

    if (password.trim() === '') {
        alert('Please enter your password.');
        return false;
    }

    return true;
}

    function validateSignUpForm() {
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (username.trim() === '') {
            alert('Please enter your username.');
            return false;
        }

        if (email.trim() === '') {
            alert('Please enter your email.');
            return false;
        }

        if (password.trim() === '') {
            alert('Please enter your password.');
            return false;
        }

        if (password !== confirmPassword) {
            alert('Passwords do not match.');
            return false;
        }

        return true; // Submit the form if all fields are valid
    }

