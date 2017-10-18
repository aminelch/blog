<?php 
function showError($error_number){
  switch ($error_number) {
    case 1:
      return "L'article désiré n'est pas trouvé";
      break;

    default:
      return "La page demandé n'est pas trouvé";
      break;
  }


}