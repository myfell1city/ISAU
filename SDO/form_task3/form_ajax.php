<?php 
 if ($_POST) 
   {
       if(isset($_POST['users'])){
        require_once('../boot.php');
        $mysqli = get_mysqli();
        $sql = "SELECT surname, name FROM records";
        $stmt = $mysqli->query($sql);
            while($row = $stmt->fetch_assoc()) { 
            $surname = $row['surname'];
            $name = $row['name'];
            echo "<li class='list-group-item'>" . $surname . " " . $name . "</li>"; 
        }
     }
   }
?>