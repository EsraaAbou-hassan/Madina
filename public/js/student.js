$(document).ready(function(){
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
    
  $('#floor_number').change(function(){
      if( $(this).val() !='' && $('#building_name').val() !='') {
          
          var building_name = $('#building_name').val();
          var floor_number = $(this).val();

          var _token = $('input[name="_token"]').val();
          
          $.ajax({
              url:"/ekhterMakanek/fetch",
              method:"POST",
              data:{building_name:building_name,floor_number:floor_number,_token:_token,},
              success:function(result){
                $('#room').html(result);
              }
          })
      }
  });

  $('#building_name').change(function(){
    $('#room').val('');
    $('#floor_number').val('');
});

});