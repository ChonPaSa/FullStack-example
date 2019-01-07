<?php

//class to manage the submitted data of the form
class SubmitData
{
	protected $id;
	protected $name;
	protected $value;
 	protected $formId;   
	
	public function __construct($array = array())
	{	
		if(isset($array["id"]))
		{
			$this->setId($array["id"]);
		}	
		if(isset($array["name"]))
		{
			$this->setName($array["name"]);
		}	
		if(isset($array["value"]))
		{
			$this->setValue($array["value"]);
		}
		if(isset($array["formId"]))
		{
			$this->setFormId($array["formId"]);
		}	
        $this->syncDB();
	}

    protected function syncDB()
	{
		$mapper = new SubmitDataMapper($this);
		$this->setId($mapper->submitData->getId());		
		$this->setName($mapper->submitData->getName());
		$this->setValue($mapper->submitData->getValue());
        $this->setFormId($mapper->submitData->getFormId());		
	}

    public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getValue()
	{
		return $this->value;
	}
	public function setValue($value)
	{
		$this->value = $value;
	}	
    public function getFormId()
	{
		return $this->formId;
	}
	public function setFormId($formId)
	{
		$this->formId = $formId;
	}
 
}
?>