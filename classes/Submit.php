<?php

//Class to manage the submitted form
class Submit
{
	protected $id;
	protected $date;
	
	public function __construct($array = array())
	{	
		if(isset($array["id"]))
		{
			$this->setId($array["id"]);
		}	
		if(isset($array["date"]))
		{
			$this->setDate($array["date"]);
		}	
        $this->syncDB();

	}
	
	protected function syncDB()
	{
		$mapper = new SubmitMapper($this);
		$this->setId($mapper->submit->getId());		
		$this->setDate($mapper->submit->getDate());
	}
	

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
}

?>