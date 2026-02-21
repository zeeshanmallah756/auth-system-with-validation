
function validateName(name, msgTag, emptyMsg, invalidMsg) {
    // Regex: Unicode letters, numbers allowed (not at start), hyphen/apostrophe/space allowed
    const regex = /^[\p{L}][\p{L}0-9]{1,29}(?:[-' ][\p{L}0-9]+)*$/u;

    // Trim leading/trailing spaces
    name = name.trim();

    // Empty check
    if (!name) {
        msgTag.innerText = emptyMsg;
        return false;
    }

    // Length checks
    if (name.length < 2) {
        msgTag.innerText = "Too Short";
        return false;
    }

    if (name.length > 30) {
        msgTag.innerText = "Too Long";
        return false;
    }

    // Regex validation
    if (!regex.test(name)) {
        msgTag.innerText = invalidMsg;
        return false;
    }

    // All good
    msgTag.innerText = "";
    return true;
}

const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");

const firstNameMsg = document.getElementById("first-name-msg");
const lastNameMsg = document.getElementById("last-name-msg");

let isValidFirstName = false;
let isValidLastName = false;

firstName.addEventListener("input", () => {
    isValidFirstName = validateName(
        firstName.value,
        firstNameMsg,
        "First name is empty!",
        "Invalid first name!"
    );
});

lastName.addEventListener("input", () => {
    isValidLastName = validateName(
        lastName.value,
        lastNameMsg,
        "Last name is empty!",
        "Invalid last name!"
    );
});

console.log(isValidFirstName);
console.log(isValidLastName);



