/*DROPDOWN*/

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 

  /*COLLAPSIBLE*/
  var coll = document.getElementsByClassName("collapsible");
  var i;
  
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }

  /**IMAGE ENLARGE*/

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var cars = document.getElementsByClassName("cars");
var myModalImg = document.getElementById("myModalImg");
var myModalImgCaptionText = document.getElementById("myModalImgCaption");

document.body.onclick = function(e) {
    var clickedEl = window.event ? event.srcElement : e.target;
    while (clickedEl != null) {
        if (clickedEl.className && (" " + clickedEl.className + " ").indexOf("cars") != -1) {
            modal.style.display = "block";
            myModalImg.src = clickedEl.src;
            myModalImgCaptionText.innerHTML = clickedEl.alt;
            return;
        }
        clickedEl = clickedEl.parentNode;
    }
}

// Get the <span> element that closes the modal
var closeMyModal = document.getElementsByClassName("closeMyModal")[0];

// When the user clicks on <span> (x), close the modal
closeMyModal.onclick = function() { 
  modal.style.display = "none";
}


