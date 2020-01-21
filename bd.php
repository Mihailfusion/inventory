<?php
$mysqli = new mysqli("localhost", "root", "", "inventory1");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
$sql = "SELECT * FROM room, device, deevicetypee where \n"
    . "  device.roomID = room.ID and\n"
    . "  device.deviceTypeID = deevicetypee.ID and\n"
    . "  room.number = 111 and\n"
    . "  partNumberID = 1";

if ($result = $mysqli->query($sql)) {

    /* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {
        printf ("%s %s %s %s %s %s %s %s %s %s %s <br>", 
        $row["number"], 
        $row["description"], 
        $row["compIp"], 
        $row["compIn"], 
        $row["compD"], 
        $row["monIn"],
        $row["monSn"], 
        $row["monMod"], 
        $row["monD"], 
        $row["printIn"], 
        $row["printSn"]);

        require_once('index.php');

    }
    // printf $result;
    /* удаление выборки */
    $result->free();
}

/* закрытие соединения */
$mysqli->close();
?>