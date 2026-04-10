// DARK MODE TOGGLE

const darkBtn = document.getElementById("darkToggle");
const body = document.body;

// Check saved mode
if(localStorage.getItem("darkMode") === "enabled"){
  body.classList.add("dark");
}

darkBtn.addEventListener("click", () => {

  body.classList.toggle("dark");

  // Save mode
  if(body.classList.contains("dark")){
    localStorage.setItem("darkMode","enabled");
  }else{
    localStorage.setItem("darkMode","disabled");
  }

});

const form = document.querySelector(".contact-form");

form.addEventListener("submit", function(e) {
  e.preventDefault();

  alert("Message Sent Successfully! 🚀");

  form.reset();
});