// Toggle Global Function
function ToggleBase (elem, target) {
  this.elem = elem;
  this.target = target;

  this.action = function(stateName) {
      this.target.setAttribute(stateName, this.target.getAttribute(stateName) === "true" ? "false" : "true");
      this.elem.classList.toggle("active");
  }
};

// Show aside
var aside = {
  btn     : document.querySelector('.toggleLeft'),
  aside   : document.querySelector('aside'),
  main    : document.querySelector('main'),

  action : function(e) {
    e.preventDefault();
    this.aside.setAttribute('show-left', this.aside.getAttribute('show-left') === 'true' ? 'false' : 'true');
    this.main.setAttribute('push-main', this.main.getAttribute('push-main') === 'true' ? 'false' : 'true');
    this.btn.classList.toggle('active');
  }
}
aside.btn.addEventListener("click", function(e) {
  aside.action(e);
});



/*
|---------------
| Preload
|---------------
*/
var removeLoading = function(elem) {
  setTimeout(function(){
      elem.className = "removed";
      console.log("Preload Removed!");
  }, 500);
};
  
window.addEventListener("DOMContentLoaded", function() {
  removeLoading(document.getElementById("preload"));
}); 



// Table 
// Jika table kosong tampilkan pesan
$(document).ready(function(){
  
});