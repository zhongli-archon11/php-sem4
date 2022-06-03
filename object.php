<?php
	class stud
	{
		public $name;
		public $semester;
		public $degree;
		public function __construct( $name, $semester,$degree)
		{
			$this->name = $name;
			$this->semester = $semester;
			$this->degree = $degree;
		}
		
		 public function message()
		{
 			return "My name is" . $this->name . " . I am in " . $this->semester . " doing " . $this->degree;
		}
	}

		$hgcstud = new stud("Nisha", "3rd sem", "BCA");
		echo $hgcstud -> message();
		echo "<br>";
		$hgcstud = new stud("Rejika", "3rd sem", "BCA");
		echo $hgcstud -> message();
		echo "<br>";
		$hgcstud = new stud("Beauti", "3rd sem", "BCA");
		echo $hgcstud -> message();
		echo "<br>";
?>


