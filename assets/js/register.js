import * as validation from "./validation.js";

const firstNameMsg = document.getElementById("first-name-msg");

firstNameMsg.innerHTML = "Hello world";
let isValidFirstName = validation.validateName("",firstNameMsg,"First name is empty!","Invalid first name!");

const firstName = document.getElementById("first-name");

console.log(isValidFirstName);



