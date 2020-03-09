<?php require_once("./skrypty/connect.php") ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartkówka</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Panel studentów</h1>
    <h2>Tablica miast</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nazwa</th>
            <th>Akcje</th>
        </tr>
        <?php
            $query = $conn->prepare('SELECT * FROM city');
            $query->execute();
            $result = $query-> get_result();
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "<td>"."<a href='./?city_id=$row[id]'>Edytuj</a>"."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <?php
        if(isset($_GET['city_id'])){
            $query2 = $conn->prepare('SELECT * FROM city WHERE id=?');
            $query2->bind_param('i',$_GET['city_id']);
            $query2->execute();
            $result2 = $query2->get_result();
            $row2 = mysqli_fetch_assoc($result2);
            $nazwa = $row2['city'];
            $id=$row2['id']
            ?>
            <h2>Edycja miasta</h2>
            <form action="./skrypty/edit_city.php" method="post">
                <input type="text" name="city_name" value="<?php echo $nazwa ?>">
                <input type="hidden" name="city_id" value="<?php echo $id ?>">
                <button type="submit" name="btn_edit_city">Zapisz</button>
            </form>

            <?php
        }
    ?>
    <h2>Tablica użytkowników</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Urodziny</th>
            <th>Miasto</th>
            <th>Akcje</th>
        </tr>
        <?php
            $query5 = $conn->prepare('SELECT `student`.id AS `id`,`student`.name,`student`.surname,`student`.birthday,`city`.city AS `city` FROM `student` INNER JOIN `city` ON `student`.city_id = `city`.id');
            $query5->execute();
            $result5 = $query5 -> get_result();
            while($row5 = mysqli_fetch_assoc($result5)){
                ?>
                <tr>
                    <td><?php echo $row5['id'] ?></td>
                    <td><?php echo $row5['name'] ?></td>
                    <td><?php echo $row5['surname'] ?></td>
                    <td><?php echo $row5['birthday'] ?></td>
                    <td><?php echo $row5['city'] ?></td>
                    <td><a href="./?student_id=<?php echo $row5['id']?>">Edytuj</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
    <?php
        if(isset($_GET['student_id'])){
            echo "<h2>Edycja miasta</h2>";
            $selected_student_query = $conn->prepare('
                SELECT name,surname,birthday,city_id FROM student WHERE id=?
            ');
            $selected_student_query->bind_param('i',$_GET['student_id']);
            $selected_student_query->execute();
            $selected_student_result = $selected_student_query->get_result();
            $selected_student = mysqli_fetch_assoc($selected_student_result);
            $student_name = $selected_student['name'];
            $student_surname = $selected_student['surname'];
            $student_birthday= $selected_student['birthday'];
            $student_city_id = $selected_student['city_id'];
            
            $all_cities_query = $conn->prepare('SELECT * FROM city');
            $all_cities_query->execute();
            $all_cities_result = $all_cities_query->get_result();
            ?>
            <form action="./skrypty/edit_student.php" method="post">
                <input type="text" name="new_name" value="<?php echo $student_name?>">
                <input type="text" name="new_surname" value="<?php echo $student_surname?>">
                <input type="date" name="new_birthday" value="<?php echo $student_birthday?>">
                <select name="new_city">
                    <?php
                        while($city = mysqli_fetch_assoc($all_cities_result)){
                            if($city['id'] == $student_city_id){
                                echo "<option selected value='$city[id]'>$city[city]</option>";
                            }else {
                                echo "<option value='$city[id]'>$city[city]</option>";
                            }
                        }
                    ?>
                </select>
                <input type="hidden" name="student_id" value="<?php echo $_GET['student_id']?>">
                <input type="submit" value="Zapisz" name="btn_edit_student">
            </form>
            <?php
        }
    ?>

</body>
</html>