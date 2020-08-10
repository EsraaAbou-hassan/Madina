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
    
  $('.dynamic').change(function(){
      if($(this).val() !=''){
          var select=$(this).attr("id");
          var value=$(this).val();
          var dependent=$(this).data('dependent');
          var _token =$('input[name="_token"].val()');
          $.ajax({
              url:"{{route('roomController.fetch')}}",
              method:"POST",
              data:{select:select,value:value,_token:_token,dependent:dependent},
              success:function(result){
                  $('#'+dependent).html(result);
              }
          })
      }
  });
  $('#building_name').change(function(){
    $('#state').val('');
    $('#floor_number').val('');
});
$('#state').change(function(){
    $('#room_number').val('');
});

});