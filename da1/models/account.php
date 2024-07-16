<?php
 function insert_category($tenloai){
    $sql = "insert into catalog (name) values ('$tenloai')";
    pdo_execute($sql);
}
?>