<?php

/*$serverhost = "localhost";
$port="50999";
$username = "postgres";
$password = "ZEBRONICS";
$dbname = "stud";
#serverconnection
$con = pg_connect($serverhost, $port, $username, $password, $dbname);*/
$con= pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=ZEBRONICS");

if (!$con) {
    die("conection failed: ");
}

if(isset($_POST["submit"]))
{ 
    $name = $_POST["studentname"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$collegename = $_POST["collegename"];
     $degree = $_POST["Degree"];
	 $degreename = $_POST["degreename"];
	 $branch = $_POST["branch"];
	 $year = $_POST["year"];
	 $cgpa = $_POST["cgpa"];
	 $subjectinterest = $_POST["subjectinterest"];
	 $workexperience = $_POST["workexperience"];
	 $noofprojects=$_POST["projects"];
	 $cv = $_POST["cv"];
	 $application = $_POST["application"];
	 $guide = $_POST["guide"];
	 $project_preference=$_POST["pref"];
	 $project_type=$_POST["protype"];
	 $startdate = $_POST["startdate"];
	 $enddate = $_POST["enddate"];
	 $accomodation=$_POST["accomodation"];
	 $username=$_POST["form_username"];
	 $password=$_POST["form_password"];
	 $email=$_POST["email"];
	 
	 
    //$file_sub = $_POST['file_sub'];
    //$refer_date = $_POST['refer_date'];
    //$issue_date = $_POST['issue_date'];
    
    
  /* $sql="create table info(name character varying(100),
     gender character varying(100),
     address text,
     collegename character varying(100),
     degree character varying(100),
     degreename character varying(100),
     branch character varying(100),
     year character varying(100),
     cgpa integer,
     subjectinterest character varying(100),
     workexperience text,
     noofprojects integer,
     cv bytea,
     application bytea,
     guide character varying(100),
     project_preference character varying(100),
     project_type character varying(100),
     startdate date,
     enddate date,
     accomodation character varying(100),
     username character varying(100),
     password character varying(100),
     email character varying(100)";*/
     //query2:
      $sql="insert into stud(name,gender,address,collegename,degree,degreename,branch,year,cgpa,subjectinterest,workexperience,noofprojects,cv,application,guide,project_preference,project_type,startdate,enddate,accomodation,username,password,email) values ('".$name."','".$gender."','".$address."','".$collegename."','".$degree."','".$degreename."','".$branch."','".$year."','".$cgpa."','".$subjectinterest."','".$workexperience."','".$noofprojects."','".$cv."','".$application."','".$guide."','".$project_preference."','".$project_type."','".$startdate."','".$enddate."','".$accomodation."','".$username."','".$password."','".$email."')";
   // $sql1 = " UPDATE file_details SET receive_date='1993-12-26' WHERE id='2' ";
    
        if (pg_query($con,$sql)) 
		{
	     echo "Registered successfully";
		} 
    else {
    echo "Error " ;//. $sql . "<br>" . mysqli_error ($con);
    } 
    
      /*if (pg_query($con,$sql1)) {
	     echo " successfully submitted";
		} 
    else {
   echo "Error " ;//. $sql . "<br>" . mysqli_error($con);
    } */
}
pg_close($con);
?>