<?php
include_once('db_con.php'); 
class Db_Class{
    private $ForLogin = 'userlogin';
	private $ForLogin_ForUserdetails = 'UserDetails';
    function createUser(){
        $sql = "INSERT INTO public.".$this->ForLogin."(username,pwd) "."VALUES('".$this->cleanData($_POST['username'])."','".$this->cleanData($_POST['pass'])."')";
        return pg_affected_rows(pg_query($sql));
    }
	 function PermanentDetailsInsert(){
        $sql = "INSERT INTO public.".$this->ForLogin_ForUserdetails."(Gpf_No,Suffix,Name,any_post_action,PFType,Category,Designation,emp_con_godate,per_go_date,temp_Join,Gender,Mstatus,FathersName,SpouseName,AadharNo,PANNo,Email_Id,Address) "."VALUES('".$this->cleanData($_POST['Gpf_No'])."','".$this->cleanData($_POST['Suffix'])."','".$this->cleanData($_POST['Name'])."','".$this->cleanData($_POST['any_post_action'])."','".$this->cleanData($_POST['PFType'])."','".$this->cleanData($_POST['Category'])."','".$this->cleanData($_POST['Designation'])."','".$this->cleanData($_POST['emp_con_godate'])."','".$this->cleanData($_POST['per_go_date'])."','".$this->cleanData($_POST['temp_Join'])."','".$this->cleanData($_POST['Gender'])."','".$this->cleanData($_POST['Mstatus'])."','".$this->cleanData($_POST['FathersName'])."','".$this->cleanData($_POST['SpouseName'])."','".$this->cleanData($_POST['AadharNo'])."','".$this->cleanData($_POST['PANNo'])."','".$this->cleanData($_POST['Email_Id'])."','".$this->cleanData($_POST['Address'])."')";
        return pg_affected_rows(pg_query($sql));
    }
    function getUsers(){             
        $sql ="select * from public." . $this->ForLogin . " ORDER BY id DESC";
        return pg_query($sql);
    } 
    function getUserById(){    
  
        $sql ="select * from public." . $this->ForLogin . "  where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 
    function deleteuser(){    
  
         $sql ="delete from public." . $this->ForLogin . "  where id='".$this->cleanData($_POST['id'])."'";
        
        echo '<script type="text/javascript">';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        return pg_query($sql);
    } 
   
     function updateUser($data=array()){       
     
        $sql = "update public.userlogin set username='".$this->cleanData($_POST['edituser'])."',pwd='".$this->cleanData($_POST['editpass'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
	
    function cleanData($val){
         return pg_escape_string($val);
    }
	
	function returndata(){
		  $sql ="select *from public.userlogin ORDER BY id DESC";
        return pg_query($sql);
		echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
		
	}
}


?>