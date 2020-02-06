'use strict';

function onClickDelete() {
 

  $.get('delete.php', {
    employeeNumber: $(this).data("index")
  }, function(response) {
    
  });

  
  
  $(this).parent().parent().remove();

}