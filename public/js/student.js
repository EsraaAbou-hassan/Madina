$(function(){
    $(".old_student").hide();
    $(".new_student").hide();
    $(".room").hide()
   
 
 
    $("input[id$='old']").click(function(){
          $(".new_student").hide();
          $(".old_student").show(); 
          
    });
    $("input[id$='new']").click(function(){
        $(".old_student").hide();
        $(".new_student").show();
      
    });
    
    $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");
        if(optionValue){
            $(".floor").not("." + optionValue).hide();
            $("." + optionValue).show();
            $(".room").show();
        } else{
            $(".floor").hide();
        }
    
}).change();

});