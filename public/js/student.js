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
$("input[id$='accepted']").click(function(){
  $("#show").hide();
  $("#rej").hide();
  $("#acc").show(); 
});
$("input[id$='rejected']").click(function(){
  $("#show").hide();
  $("#acc").hide();
  $("#rej").show(); 
});

   
 });