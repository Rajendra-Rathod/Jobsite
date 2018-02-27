<?php
include 'ConnectionProvider.php';

  //echo '<script>alert("Are You Sure..?")</script>';
$Connect = new ConnectionProvider();
$con=$Connect->getCon();
 
 $index1=$index2=$query1="";
$qualification=$_POST["qualification"];
$qualification= explode(',', $qualification);

   
if(isset($_POST["qualification"]) && !empty($_POST["qualification"])){
   
    echo '<script>alert("Are You Sure..?")</script>';
	for ($index1 = 0; $index1 < count($qualification); $index1++) {
            
        
    $query = $con->query("SELECT * FROM course WHERE q_id = '$qualification[$index1]'" );
  
    
    $rowCount = $query->num_rows;
    
    
    
   
    if($rowCount > 0){
        
       
        while($getCourse = $query->fetch_assoc()){ 
            echo '<option value="'.$getCourse['c_id'].'"><input type="checkbox">'.$getCourse['course'].'</option>';
        }
    }else{
        echo '<option value="">course not available</option>';
    }
  }
 
}
 
$course=$_POST["course"];
$course= explode(',', $course);

if(isset($_POST["course"]) && !empty($_POST["course"])){
    
    $Connect = new ConnectionProvider();
$con=$Connect->getCon();
     echo '<script>alert("Are YOu Sure..?")</script>';
    for($index2=0;$index2 < count($course);$index2++){
       
       $query = $con->query("SELECT * FROM specialization WHERE cc_id = '$course[$index2]'" );
    
       $rowCount = $query->num_rows;
        
        if($rowCount > 0){
        //echo '<option value="" disabled selected><input type="checkbox">Select course</option>';
       
        while($getSpecialization = $query->fetch_assoc()){ 
            echo '<option value="'.$getSpecialization['s_id'].'"><input type="checkbox">'.$getSpecialization['specialization'].'</option>';
        }
    }else{
        echo '<option value="">course not available</option>';
    }
        
        
    }
  
    
    
    

}
?>