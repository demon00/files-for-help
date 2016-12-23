// Плавный скролл по якорям
$(document).ready(function(){
	$('a[href^="#"]').bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 600);
		e.preventDefault();
	});
	return false;
});﻿
//END Плавный скролл по якорям

// select
$('.custom_select').on('click', function() {
  $('.custom_options').toggle(function() {
  });
});
$('.custom_select').on('click', 'a', function() {
  var choosenValue = $(this).data('value'),
  choosenText = $(this).text();
  $('select').val(choosenValue).prop('selected', true);
  $(".current_option")
  .data('value', choosenValue)
  .find('span')
  .text(choosenText);
  $('.custom_options').hide();
});

$(document).mouseup(function (e) {
    var container = $(".custom_options");
    if (container.has(e.target).length === 0){
        container.hide();
    }
});

// end select

//parallax
if($(window).innerWidth() >= 980) {
  $(window).scroll(function() {
  var st = $(this).scrollTop();
  $(".wrapper-middle-side").css({
    "transition" : "all .1s ease",
    "transform" : "translate(0%, " + st /12 + "%"
  });
});
}



//END parallax

// Menu scroll
var lastId,
    topMenu = $(".nav__ul"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

 // Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }             
});
// Menu scroll end

// Krest
document.getElementById('x').addEventListener('click', function () {
    if (this.classList.contains('clicked')) {
      this.classList.remove('clicked');
    } else {
      this.classList.add('clicked');
    }
  });
// Krest END

//Menu MediaQ
$(document).ready(function(){
$(".nav__krest").on('click', function() {
  $(".nav__ul").toggle()
});
});
// Menu MQ END