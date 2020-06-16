$(function(){
  $(".old_student").hide();
  $(".new_student").hide();
  $(".n").hide();
  $(".o").hide();
 
  $("input[id$='old']").click(function(){
        $(".o").show(); 
        $(".new_student").hide();
        $(".old_student").show(); 
        
});
$("input[id$='new']").click(function(){
    $(".old_student").hide();
    $(".new_student").show();
    $(".n").show(); 
});

$("#acc").hide();
$("#rej").hide();

$(".accepted").click(function(){
   $("#show").hide();
   $("#acc").show(); 
});
$(".rejected").click(function(){
  $("#show").hide();
  $("#rej").show(); 
});

   
 });