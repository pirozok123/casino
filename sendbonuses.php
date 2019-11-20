<?php

require("./db.php");
require("./functions.php");

/* Добавляем всем юзерам бонусы, очки и предметы столько раз сколько назначали в случайном порядке */

$howmuchsendbonuses = (int)$_GET["howmuch"];

while($howmuchsendbonuses){
 sendBonuses($howmuchsendbonuses);
 $howmuchsendbonuses--;
}

?>