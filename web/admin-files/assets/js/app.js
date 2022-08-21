$(function() {
	"use strict";
	
	new PerfectScrollbar(".header-message-list"),
	new PerfectScrollbar(".header-notifications-list"),
	
     	$(".mobile-search-icon").on("click", function() {
			
		  $(".search-bar").addClass("full-search-bar")
		 
	    }), 
	
	  $(".search-close").on("click", function() {
	 	$(".search-bar").removeClass("full-search-bar")
      }), 
	
	
	$(".mobile-toggle-menu").on("click", function() {
		$(".wrapper").addClass("toggled")
	}), $(".toggle-icon").click(function() {
		console.log("ssadsa")
		$(".wrapper").hasClass("toggled") ? ($(".wrapper").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($(".wrapper").addClass("toggled"), $(".sidebar-wrapper").hover(function() {
			$(".wrapper").addClass("sidebar-hovered")
		}, function() {
			console.log("ssadsa")
			$(".wrapper").removeClass("sidebar-hovered")
		}))
	}), $(document).ready(function() {
		$(window).on("scroll", function() {
			$(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
		}), $(".back-to-top").on("click", function() {
			return $("html, body").animate({
				scrollTop: 0
			}, 600), !1
		})
	}),

	$(document).ready(function () {
			$(window).on("scroll", function () {
				if ($(this).scrollTop() > 60) {
					$('.topbar').addClass('bg-dark');
				} else {
					$('.topbar').removeClass('bg-dark');
				}
			});
			$('.back-to-top').on("click", function () {
				$("html, body").animate({
					scrollTop: 0
				}, 600);
				return false;
			});
		});


	$(function() {
		for (var e = window.location, o = $(".metismenu li a").filter(function() {
				return this.href == e
			}).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
	}), $(function() {
		$("#menu").metisMenu()
	}), $(".chat-toggle-btn").on("click", function() {
		$(".chat-wrapper").toggleClass("chat-toggled")
	}), $(".chat-toggle-btn-mobile").on("click", function() {
		$(".chat-wrapper").removeClass("chat-toggled")
	}), $(".email-toggle-btn").on("click", function() {
		$(".email-wrapper").toggleClass("email-toggled")
	}), $(".email-toggle-btn-mobile").on("click", function() {
		$(".email-wrapper").removeClass("email-toggled")
	}), $(".compose-mail-btn").on("click", function() {
		$(".compose-mail-popup").show()
	}), $(".compose-mail-close").on("click", function() {
		$(".compose-mail-popup").hide()
	}),
	
	
	$(".switcher-btn").on("click", function() {
		$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}),


	$('#theme1').click(theme1);
    $('#theme2').click(theme2);
    $('#theme3').click(theme3);
    $('#theme4').click(theme4);
    $('#theme5').click(theme5);
    $('#theme6').click(theme6);
    $('#theme7').click(theme7);
    $('#theme8').click(theme8);
    $('#theme9').click(theme9);
    $('#theme10').click(theme10);
    $('#theme11').click(theme11);
    $('#theme12').click(theme12);
    $('#theme13').click(theme13);
    $('#theme14').click(theme14);
    $('#theme15').click(theme15);

    function theme1() {
      $('body').attr('class', 'bg-theme bg-theme1');
    }

    function theme2() {
      $('body').attr('class', 'bg-theme bg-theme2');
    }

    function theme3() {
      $('body').attr('class', 'bg-theme bg-theme3');
    }

    function theme4() {
      $('body').attr('class', 'bg-theme bg-theme4');
    }
	
	function theme5() {
      $('body').attr('class', 'bg-theme bg-theme5');
    }
	
	function theme6() {
      $('body').attr('class', 'bg-theme bg-theme6');
    }

    function theme7() {
      $('body').attr('class', 'bg-theme bg-theme7');
    }

    function theme8() {
      $('body').attr('class', 'bg-theme bg-theme8');
    }

    function theme9() {
      $('body').attr('class', 'bg-theme bg-theme9');
    }

    function theme10() {
      $('body').attr('class', 'bg-theme bg-theme10');
    }

    function theme11() {
      $('body').attr('class', 'bg-theme bg-theme11');
    }

    function theme12() {
      $('body').attr('class', 'bg-theme bg-theme12');
    }

	function theme13() {
		$('body').attr('class', 'bg-theme bg-theme13');
	  }
	  
	  function theme14() {
		$('body').attr('class', 'bg-theme bg-theme14');
	  }
	  
	  function theme15() {
		$('body').attr('class', 'bg-theme bg-theme15');
	  }



});
function initImageUpload(box) {
	let uploadField = box.querySelector(".image-upload");
  
	uploadField.addEventListener("change", getFile);
  
	function getFile(e) {
	  let file = e.currentTarget.files[0];
	  checkType(file);
	}
  
	function previewImage(file) {
	  let thumb = box.querySelector(".js--image-preview"),
		reader = new FileReader();
  
	  reader.onload = function () {
		thumb.style.backgroundImage = "url(" + reader.result + ")";
	  };
	  reader.readAsDataURL(file);
	  thumb.className += " js--no-default";
	}
  
	function checkType(file) {
	  let imageType = /image.*/;
	  if (!file.type.match(imageType)) {
		throw "Datei ist kein Bild";
	  } else if (!file) {
		throw "Kein Bild gewählt";
	  } else {
		previewImage(file);
	  }
	}
  }
  
  // initialize box-scope
  var boxes = document.querySelectorAll(".box");
  
  for (let i = 0; i < boxes.length; i++) {
	let box = boxes[i];
	initDropEffect(box);
	initImageUpload(box);
  }
  
  /// drop-effect
  function initDropEffect(box) {
	let area,
	  drop,
	  areaWidth,
	  areaHeight,
	  maxDistance,
	  dropWidth,
	  dropHeight,
	  x,
	  y;
  
	// get clickable area for drop effect
	area = box.querySelector(".js--image-preview");
	area.addEventListener("click", fireRipple);
  
	function fireRipple(e) {
	  area = e.currentTarget;
	  // create drop
	  if (!drop) {
		drop = document.createElement("span");
		drop.className = "drop";
		this.appendChild(drop);
	  }
	  // reset animate class
	  drop.className = "drop";
  
	  // calculate dimensions of area (longest side)
	  areaWidth = getComputedStyle(this, null).getPropertyValue("width");
	  areaHeight = getComputedStyle(this, null).getPropertyValue("height");
	  maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));
  
	  // set drop dimensions to fill area
	  drop.style.width = maxDistance + "px";
	  drop.style.height = maxDistance + "px";
  
	  // calculate dimensions of drop
	  dropWidth = getComputedStyle(this, null).getPropertyValue("width");
	  dropHeight = getComputedStyle(this, null).getPropertyValue("height");
  
	  // calculate relative coordinates of click
	  // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
	  x = e.pageX - this.offsetLeft - parseInt(dropWidth, 10) / 2;
	  y = e.pageY - this.offsetTop - parseInt(dropHeight, 10) / 2 - 30;
  
	  // position drop and animate
	  drop.style.top = y + "px";
	  drop.style.left = x + "px";
	  drop.className += " animate";
	  e.stopPropagation();
	}
  }

  
  