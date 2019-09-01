$(document).ready(function() {
				 
				  var owl = $(".owl-carousel");
				 
				  //owl.owlCarousel();

				  owl.owlCarousel({
				    loop:false, //makes images slide up to end
					
					mouseDrag: true,
					responsiveClass:true,
					//nav:true,
					//navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],//adding navigation icons
				    items:4, //number of items to display in the screen
				    responsive: {
				        0:{
				          items: 1 //number of items to display in small devices
				        },
				        480:{
				          items: 2 //number of items to display in mo devices
				        },
				        1000:{
				          items: 4 //number of items to display in pc, tablet and larger devices
				        }
				    }

				});
				 
				  // Custom Navigation Events
				  $(".next").click(function(){
				    owl.trigger('next.owl.carousel');
				  })
				  $(".prev").click(function(){
				    owl.trigger('prev.owl.carousel');
				  })
				 
				  	/*
						array map create'598x233_a' => 'images/'
						imageNode = document.getElementById('img_'+i);
						imageNode.src = "/iamges/img_"+i;
				  	*/

				});