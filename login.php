<?php

print_r($_POST);
print{"<br>"}
print($_POST['ID']);
print($_POST['pw']);

include('db.php');

$sql= 'select name, 
              age, 
              sex, 
              location
        from member
        where sex';

$result= $conn -> query($sql);

echo "<br>row의 갯수 ";
echo $result->num_rows;
echo "<br><br><br>";    

while( $row= $result->fetch_array(MYSQLI_ASSOC))
{
    print($row ['name']);
    print($row ['age']);
    print($row ['sex']);
    print($row ['location']);
    
}