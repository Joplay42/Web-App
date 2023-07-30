import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const toggleButton = document.getElementById("toggleButton");
        const mobileMenu = document.getElementById("mobileMenu");

        toggleButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

// Get the current date and format it as yyyy-mm-dd
const today = new Date();
const year = today.getFullYear();
let month = today.getMonth() + 1;
let day = today.getDate();

// Add leading zeros if necessary
if (month < 10) {
    month = `0${month}`;
}

if (day < 10) {
    day = `0${day}`;
}

// Set the 'min' attribute of the date input
const dateInput = document.getElementById('date');
dateInput.min = `${year}-${month}-${day}`;
