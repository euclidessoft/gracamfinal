

document.addEventListener("DOMContentLoaded", function() {
    const readMoreButtons = document.querySelectorAll(".read-more-button");

    readMoreButtons.forEach(function(button) {
        const shortDescription = button.previousElementSibling;
        const chevronIcon = button.querySelector(".chevron-icon");
        const buttonText = button.querySelector(".button-text");

        if (shortDescription.scrollHeight > 80) {
            shortDescription.style.maxHeight = "80px";
            button.style.display = "block";

            button.addEventListener("click", function() {
                if (shortDescription.style.maxHeight === "80px") {
                    shortDescription.style.maxHeight = "none";
                    chevronIcon.classList.remove("fa-chevron-down");
                    chevronIcon.classList.add("fa-chevron-up");
                    buttonText.textContent = "";
                } else {
                    shortDescription.style.maxHeight = "80px";
                    chevronIcon.classList.remove("fa-chevron-up");
                    chevronIcon.classList.add("fa-chevron-down");
                    buttonText.textContent = "";
                }
            });
        }
    });
});


function openDropdown(element) {
    const dropdown = element.nextElementSibling; // Sélectionne le menu déroulant suivant

    if (dropdown) {
        dropdown.classList.add("show");
    }
}

function closeDropdown(element) {
    const dropdown = element; // L'élément sur lequel l'événement "onmouseleave" est déclenché

    if (dropdown) {
        dropdown.classList.remove("show");
    }
}



