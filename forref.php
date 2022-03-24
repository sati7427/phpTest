<?php

	 // Defining a new constant
    define('URL', 'https://s.co');
    echo(URL);
	echo '<br />';

	
	function introduction($greeting, $location) {
        echo($greeting . ', I am from ' . $location . '.');
    }
    introduction('Hi', 'Los Angeles');
	
	echo '<br />';
	
	function sa($a,$b)
	{
		//return $a.''.$b;
		return $a+$b;
	}
	echo ('total is'. sa(5,3).'nice');
	echo '<br />';
	
	var_dump(63 === 42);
	 echo(7 === 7);
	 
	 
	echo '<br />';
	
	function forif($a){
	if ($a >= 6) {return('I am sleepy!');}
	else if($a>=5){return 'sasa';}
    else {return 'other';}
	}	
	echo forif(7);
		
     echo '<br />';
   

	
	class test  
	{
    public $emp=0;
	public function __construct ($emp)
	{$this->emp=$emp;}
	public function sasa()
	{return 'values are  ' . $this->emp .'   asas';}
	public function setval($sett)
	{ $this->emp=$sett;}
	
	}
	$ta = new test(250);
    echo($ta->sasa()); echo '<br />';

    $ta->emp = 300; // changing value directly
    echo($ta->sasa()); echo '<br />';

    $ta->setval(400); // changing value through a function
    echo($ta->sasa()); echo '<br />';
	
	
	class test1 extends test {

        public function getType() {
            return 'I am an apple!';
        }
    }

    $taa = new test1(300);

    echo($taa->getType());
    echo($taa->sasa());
	
	
	
	
	
	echo '<br />';
	echo(date('d/m/Y'));
	echo '<br />';
	
	 
	echo ($_POST['query']);
	
	echo '<br/>';
	
	   $file = fopen("sa.txt", "r");

    while (!feof($file)) {
        $line = fgets($file);
        echo($line . "<br>");
    }

    fclose($file);
	
	echo '<br/>';
	
?>


<form action="" method="POST">
    <input type="text" name="query" />
    <input type="submit" />
</form>


<?php
//include('foo.php');//shows error only
//require('footer.php');//defanatly need
?>

<?php

$data = ["Hello" => 1, "World" => 2];
    $json = json_encode($data);
    echo($json);
	echo '<br/>';
	
	
	class test  
	{
	public $name;
    public $age;
	//public function __construct ($name,$age){$this->name=$name; $this->age=$age;}
	public function setname($sett){ $this->name=$sett;}
	public function setage($sett){ $this->age=$sett;}
	}
	
	$ta=new test();
	$ta->name="Sathish";
	$ta->age=30;
	// $ta->setname('sathish'); 
	// $ta->setage(20);
	 $json=json_encode($ta);
    //echo($ta->sasa());
	echo ($json);
	
	
	echo '<br/><br/>';
	
	// $json = '{"name":"Blake","age":26,"city":"New York City"}';
    $object = json_decode($json);

    echo($object->name  . "<br>");

    foreach ($object as $key => $value) {
        echo($key . "=>" . $value . "<br>");
    }
	
echo '<br/><br/>';

    // $name = "city";
    // $value = "Miami";
    // $duration = 60 * 60 * 24 * 30; // 30 days

    // setcookie($name, $value, time() + $duration);
	 if (isset($_COOKIE['city'])){
        echo($_COOKIE['city']);
    } else {
         echo 'the cookie doesnt exist';
    }
	echo '<br/>';
	//print_r($_COOKIE);
	
	echo '<br/>';
	
	$servername = "localhost";
$username = "root";
$password = "sa";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
	
	
	// $username = 'Biggie';
    // $email = 'biggie@mail.com';
    // $query = 'INSERT INTO tes (na, pa) VALUES (:username, :email)';
    // $params = ['username' => $username,'email' => $email];
    // $statement = $pdo->prepare($query);
    // $statement->execute($params);
    // echo('User added successfully.');
	
	
	// $id = 'sa';
    // $query = 'SELECT * FROM tes WHERE na = :id';
    // $statement = $pdo->prepare($query);
    // $statement->bindParam(':id', $id);
    // $statement->execute();
    // $data = $statement->fetch(PDO::FETCH_ASSOC);
    // print_r($data);
	
	
	
	// $name='sa';
	// $quer='delete from tes where na= :id';
	// $params = ['id' => $name];
	// $process=$pdo->prepare($quer);
	// $process->execute($params);
	// echo('User deleted successfully.');
?>


















