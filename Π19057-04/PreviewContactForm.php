 <?php
    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $course=$_POST['course'];   

       $query="insert into student_tbl(`name`,`course`) values('$name','$course')";
        if ($conn->query($query) === TRUE){
           header("location: home.php");
         }
       else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();  
       }
    ?>