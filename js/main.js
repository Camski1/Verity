

$("#btn1, #PopB2, #PopB1").click(function () {
  if ( $( "#popUp" ).is( ":hidden" ) ) {
    $( "#popUp" ).show("slow");
  }else{
    $( "#popUp" ).hide("slow");
  }
});