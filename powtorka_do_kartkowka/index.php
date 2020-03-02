<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do kartkowki</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require_once './skrypty/connect.php';

        $sql = 'SELECT `user`.id, `user`.fname, `user`.lname, `user`.age, `kolor`.kolor FROM `user` INNER JOIN `kolor` ON `user`.ulubiony_kolor = `kolor`.id';
        $result = mysqli_query($conn,$sql);

    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Wiek</th>
            <th>Kolor</th>
            <th>Akcje</th>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td>
                <?php echo $row['id']?>
            </td>
            <td>
                <?php echo $row['fname']?>
            </td>
            <td>
                <?php echo $row['lname']?>
            </td>
            <td>
                <?php echo $row['age']?>
            </td>
            <td>
                <?php echo $row['kolor']?>
            </td>
            <td>
                <a href="?user_id=<?php echo $row['id']?>">Aktualizuj</a>
                <a href="skrypty\del_user.php?user_id=<?php echo $row['id']?>">Usuń</a>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
    <?php
        if(isset($_GET['user_id'])){
            // AKTUALIZACJA USERA
            $query = $conn->prepare('SELECT `user`.id, `user`.fname, `user`.lname, `user`.age, `kolor`.kolor FROM `user` INNER JOIN `kolor` ON `user`.ulubiony_kolor = `kolor`.id WHERE `user`.id=?');
            $query->bind_param('i',$_GET['user_id']);
            $query->execute();
            $result = $query -> get_result();
            while($row = mysqli_fetch_assoc($result)){
            ?>
                <form action="./skrypty/update_user.php" method="POST">
                    <div>
                        <label for="fname">Imię</label>
                        <input type="text" name="fname" id="fname" value="<?php echo $row['fname'] ?>">
                    </div>
                    <div>
                        <label for="lname">Nazwisko</label>
                        <input type="text" name="lname" id="lname" value="<?php echo $row['lname'] ?>">
                    </div>
                    <div>
                        <label for="age">Wiek</label>
                        <input type="number" name="age" id="age" value="<?php echo $row['age'] ?>">
                    </div>
                    <div>
                        <label for="kolor"></label>
                        <select name="color" id="kolor">
                            <?php
                                $sql2 = 'SELECT `kolor`.id, `kolor`.kolor FROM `kolor`';
                                $result2 = mysqli_query($conn,$sql2);
                                while($row2 = mysqli_fetch_assoc($result2)){
                                    if($row2['kolor'] == $row['kolor']) {
                                        echo "<option selected value='".$row2['id']."'>".$row2['kolor']."</option>";
                                    }else {
                                        echo "<option value='".$row2['id']."'>".$row2['kolor']."</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                    <input type="submit" value="Wyślij" name="btn">
                </form>
            <?php
            }
        }else {
            // dodawanie usera
            ?>
                <form action="./skrypty/add_user.php" method="POST">
                    <div>
                        <label for="fname">Imię</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div>
                        <label for="lname">Nazwisko</label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    <div>
                        <label for="age">Wiek</label>
                        <input type="number" name="age" id="age">
                    </div>
                    <div>
                        <label for="kolor"></label>
                        <select name="color" id="kolor">
                            <?php
                                $sql2 = 'SELECT `kolor`.id, `kolor`.kolor FROM `kolor`';
                                $result2 = mysqli_query($conn,$sql2);
                                while($row2 = mysqli_fetch_assoc($result2)){
                                    echo "<option value='".$row2['id']."'>".$row2['kolor']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <input type="submit" value="Wyślij" name="btn">
                </form>
            <?php
        }

    ?>
    
</body>
</html>