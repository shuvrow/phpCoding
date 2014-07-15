<?php
class Account
{
private $name;
private $date;
private $balance;

 	public function set_name($name) {
        $this->name=$name;
    }

        public function set_date($date) {
        $this->date=$date;
    }

    public function get_name() {
        return $this->name;
    }

	
    
        public function get_date() {
       return $this->date;
    }


	 public function get_balance() {
        return $this->balance;
    }




    


	function __construct($name,$date)
	{
		$this->name=$name;
		$this->date=$date;
		$this->balance=0;
		echo $this->name ;
		echo $this->date;

	}
    public function withdraw($amount)
    {
        if ($this->balance - $amount >= 0)
        {
            $this->balance = $this->balance - $amount;
            return "Withdrawn";
        }
        else
        {
            return 'Insufficient balance';
        }
    }

	public function deposit($amount)
	{
		
		$this->balance += $amount;
		
		return $this->balance;

	}


}


?>