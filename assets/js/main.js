// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

// User Toggle
let arrowButton = document.querySelector("#user");
let subMenu = document.querySelector(".user_submenu");

// Function to hide the submenu
function hideSubMenu() {
  subMenu.classList.remove("open");
}

arrowButton.onclick = function () {
  subMenu.classList.toggle("open");
};

// Add a click event listener to the document to hide the submenu when clicking anywhere
document.addEventListener("click", function (event) {
  // Check if the clicked element is not a child of the submenu
  if (event.target !== arrowButton) {
    hideSubMenu();
  }
});
