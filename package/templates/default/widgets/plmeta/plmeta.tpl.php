<?php    
      $insTemp = cmsTemplate::getInstance();

      if (!(empty($otitle))) {
        $insTemp->setPageTitle($otitle);
      }

      if (!(empty($okeywords))) {      
        $insTemp->setPageKeywords($okeywords);
      }
	  
      if (!(empty($odescription))) {
        $insTemp->setPageDescription($odescription);
      }
?>