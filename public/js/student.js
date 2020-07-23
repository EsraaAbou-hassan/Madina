$(function(){
    $(".old_student").hide();
    $(".new_student").hide();
 
 
    $("input[id$='old']").click(function(){
          $(".new_student").hide();
          $(".old_student").show(); 
          
    });
    $("input[id$='new']").click(function(){
        $(".old_student").hide();
        $(".new_student").show();
      
    });
});