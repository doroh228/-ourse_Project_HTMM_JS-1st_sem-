<?php
    $HOST="localhost";
    $USER="root";
    $PASSW="root";
    $NAME="seasons_base";

    $mysql = new PDO("mysql:host=$HOST;dbname=$NAME",$USER, $PASSW);

    if($mysql->connect_errno) echo('Ошибка');

    //поолучение всех сезонов
    function get_seasons(){
        global $mysql;
        $season = $mysql->query("SELECT * FROM seasons");
        return $season;
    }

    function get_season_by_id($id){
        global $mysql;
        $season1 = $mysql->query("SELECT * FROM seasons WHERE id = $id");
        foreach($season1 as $season){
            return $season;
        }
    }
?>