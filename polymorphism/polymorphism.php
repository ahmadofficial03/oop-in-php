<?php 

abstract class Person
{
	abstract public function greet();
}

class English extends Person
{
	public function greet()
	{
		return 'Hello!';
	}
}

class French extends Person
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

class German extends Person
{
	public function greet()
	{
		return 'Hallo!';
	}
}


$englishPeople = new English();
$germanPeople = new German();
$frenchPeople = new French();

echo $frenchPeople->greet();
echo $englishPeople->greet();
echo $germanPeople->greet();

$englishPeople = $frenchPeople;  // One Object in different forms.
echo $englishPeople->greet();    
