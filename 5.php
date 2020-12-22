<?php

$link = mysqli_connect('localhost', 'root', 'root', 'blog') or die(mysqli_error($link));
$sql = "SELECT * FROM news";
$res = mysqli_query($link, $sql);

echo '<table border="1" width="100%"><tr><th>name</th><th>link</th><th>info</th></tr>';

while ($row = mysqli_fetch_assoc($res)) {
    echo "
        <tr>
            <td>{$row['name']}</td>
            <td>{$row['link']}</td>
            <td>{$row['info']}</td>
        </tr>
        ";
}
echo '</table>';
