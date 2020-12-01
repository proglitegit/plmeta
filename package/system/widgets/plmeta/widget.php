<?php

class widgetPlmeta extends cmsWidget {

    public $is_cacheable = false;

    public function run(){
		
		$this->setWrapper('wrapper_plain');
		
		$this->is_title = false;
        
        return array(
		             'otitle'=>$this->getOption('otitle'),
					 'okeywords'=>$this->getOption('okeywords'),
					 'odescription'=>$this->getOption('odescription')
		);

    }

}