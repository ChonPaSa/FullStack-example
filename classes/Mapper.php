<?php
//Class to map the Submit class to the database
class SubmitMapper
{
	public $submit;
			    
	public function __construct($submit)
	{
		$this->submit = $submit;
		$id = $this->runInsert();	
        $this->submit->setId($id);	
	}		
	
	public function runInsert()
	{
		$db = new Database();
		return $db->sqlInsert("INSERT INTO formsubmit (date) values (:date)", 
                              array("date"=> $this->submit->getDate()));
	}	
}

//Class to map the SubmitData class to the database
class SubmitDataMapper
{
	public $submitData;
			    
	public function __construct($submitData)
	{
		$this->submitData = $submitData;
		$id = $this->runInsert();	
        $this->submitData->setId($id);	
	}		
	
	public function runInsert()
	{
		$db = new Database();
		return $db->sqlInsert("INSERT INTO formsubmitdata (name,value,formSubmit_id) 
                            values (:name, :value, :formId)", 
                              array("name"=> $this->submitData->getName(),
                                    "value"=> $this->submitData->getValue(),
                                    "formId"=> $this->submitData->getFormId()));
	}	
}
?>