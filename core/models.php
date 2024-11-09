<?php

function searchForAUser($pdo, $searchQuery) {
    $sql = "SELECT * FROM search_users_data WHERE
    CONCAT(first_name, last_name, username, email,
        contact_num, date_added) LIKE?";
    $stmt = $pdo -> prepare($sql);
    $executeQuery = $stmt -> execute(["%".$searchQuery."%"]);
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}
?>