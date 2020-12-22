<?php

$link = mysqli_connect('localhost', 'root', 'root', 'auto') or die(mysqli_error($link));
$sql = "
    SELECT
	cua.id,
	cd_b.`value` 'marka',
	cd_m.`value` 'model',
	cd_cb.`value` 'kuzov',
	cua.`year` 'god',
	cua.price 'tsena',
	cd_c.`value` 'sostoyanie',
	cd_et.`value` 'dvigatel',
	cd_gt.`value` 'kpp',
	cd_wt.`value` 'privod',
	cd_clr.`value` 'tsvet',
	cd_s.`value` 'prodavets',
    u.firstname 'imya',
    u.lastname 'familiya',
    cua.city 'gorod',
    u.phone 'telefon',
    co.companyname 'kompaniya'
FROM cars_user_ads cua
JOIN cars c ON c.id = cua.id_cars
JOIN users u ON u.id = cua.id_user
-- подключаем справочник от каталога авто
JOIN catalog_data cd_b ON cd_b.id = c.id_brand
JOIN catalog_data cd_m ON cd_m.id = c.id_model
JOIN catalog_data cd_cb ON cd_cb.id = c.id_car_body
JOIN catalog_data cd_et ON cd_et.id = c.id_engine_type
JOIN catalog_data cd_gt ON cd_gt.id = c.id_gearbox_type
JOIN catalog_data cd_wt ON cd_wt.id = c.id_wheel_type
-- подключаем справочник от объявления
JOIN catalog_data cd_s ON cd_s.id = cua.id_seller
JOIN catalog_data cd_c ON cd_c.id = cua.id_condition
JOIN catalog_data cd_clr ON cd_clr.id = cua.id_color
-- подключаем название компании продавца 
LEFT JOIN user_company uc ON uc.id_company = u.id
LEFT JOIN company co ON co.id = uc.id_company

ORDER BY cua.id
";
$res = mysqli_query($link, $sql);

echo '<table border="1" width="100%">
        <tr>
            <th>марка</th>
            <th>модель</th>
            <th>кузов</th>
            <th>цена</th>
            <th>состояние</th>
            <th>двигатель</th>
            <th>кпп</th>
            <th>привод</th>
            <th>цвет</th>
            <th>продавец</th>
            <th>имя</th>
            <th>фамилия</th>
            <th>город</th>
            <th>телефон</th>
            <th>компания</th>
        </tr>';

while ($row = mysqli_fetch_assoc($res)) {
    echo "
        <tr>
            <td>{$row['marka']}</td>
            <td>{$row['model']}</td>
            <td>{$row['kuzov']}</td>
            <td>{$row['tsena']}</td>
            <td>{$row['sostoyanie']}</td>
            <td>{$row['dvigatel']}</td>
            <td>{$row['kpp']}</td>
            <td>{$row['privod']}</td>
            <td>{$row['tsvet']}</td>
            <td>{$row['prodavets']}</td>
            <td>{$row['imya']}</td>
            <td>{$row['familiya']}</td>
            <td>{$row['gorod']}</td>
            <td>{$row['telefon']}</td>
            <td>{$row['kompaniya']}</td>
        </tr>
        ";
}
echo '</table>';