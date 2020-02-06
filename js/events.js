'use strict';

function onClickDelete() {
 

  $.get('delete.php', {
    employeeNumber: $(this).data("index")
  }, function(response) {
    
    if(response == '1') {
      $(this).parent().parent().remove();
    }    
  });

}