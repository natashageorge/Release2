/*burger button starts here*/
function toggleSidebar() {
  $(".button").toggleClass("active");
  $("main").toggleClass("move-to-left");
  $(".sidebar-item").toggleClass("active");
}


$(".button").on("click tap", function() {
  toggleSidebar();
});
 
$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    toggleSidebar();
  }
});
/*burger button ends here*/
