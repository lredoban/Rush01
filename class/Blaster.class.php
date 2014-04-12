<?php

require_once('Weapon.class.php');

class Blaster extends Weapon
{
	static private $name = 'Blaster';
	static private $charges = 0;
	static private $small_range = 20;
	static private $medium_range = 40;
	static private $long_range = 60;

	public function __construct()
	{
		$this->setName(self::$name);
		$this->setCharges(self::$charges);
		$this->setSmallRange(self::$small_range);
		$this->setMediumRange(self::$medium_range);
		$this->setLongRange(self::$long_range);
		return;
	}
	
	public function __toString()
	{
		return 'Blaster';
	}

	public static function doc()
	{
		if (file_exists("doc/Blaster.doc.txt"))
			return (file_get_contents("doc/Blaster.doc.txt"));
		return ("File not found : Blaster.doc.txt");
	}
}

?>
