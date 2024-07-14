// About
let Abouts = document.querySelectorAll(".Abt1");

Abouts.forEach((Abt1, index) => {
  Abt1.addEventListener("click", function() {
    let Parag = document.querySelectorAll(".Abt1p")[index];

    if (!this.dataset.clicked) {
      this.setAttribute("data-clicked", "true");
      Parag.style.display = "block";
    } else {
      this.removeAttribute("data-clicked");
      Parag.style.display = "none";  // Add this line to toggle visibility back to hidden
    }
  });
});

// SignUp
function SignUp() {
    const inputboxes = document.querySelectorAll("input");
    for (let inputbox of inputboxes) {
        if (inputbox.value === '') {
            alert("You must Fill out all the fields!");
            return;
        }
    }
}


// Download
   function Download() {
   const images = document.getElementById("img"); 
   const imgd = images.getAttribute('src');
   const body = document.getElementByClassName("Download") 
  body.style.background = imgd
   
  }