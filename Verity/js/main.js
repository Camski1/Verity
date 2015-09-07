
$(".btn1").click(function () {
  if ( $( "#popUp" ).is( ":hidden" ) ) {
    $( "#popUp" ).show("slow");
  }else{
    $( "#popUp" ).hide("slow");
  }
});

$("#btn11").click(function () {
  if ( $( "#foll" ).is( ":hidden" ) ) {
    $( "#foll" ).show()
    $( "#trens" ).hide();
    $( ".tabs" ).css('background-color', '#89bde6');
    $( ".tabs" ).css('color', '#093858'); ////////
    $( ".tabs2" ).css('background-color', '#093858'); 
    $( ".tabs2" ).css('color', '#89bde6'); //////// 
  }else{
    //$( "#popUp" ).hide("slow");
  }
});

$("#btn12").click(function () {
  if ( $( "#trens" ).is( ":hidden" ) ) {
    $( "#trens" ).show()
    $( "#foll" ).hide();
    $( ".tabs2" ).css('background-color', '#89bde6');/////// 
    $( ".tabs2" ).css('color', '#093858'); ////////
    $( ".tabs" ).css('background-color', '#093858'); 
    $( ".tabs" ).css('color', '#89bde6'); ////////  
  }else{
    //$( "#popUp" ).hide("slow");
  }
});


$(document).ready(function() {
		$('.myMenu > li').bind('mouseover', openSubMenu);
		$('.myMenu > li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		};
				   
	});

 