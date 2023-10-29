<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $script = $_POST["script"];
    $market = $_POST["market"];
    $world = $_POST["world"];
    $player = $_POST["player"];

    $data = "Script: $script, Market: $market, World: $world, Player: $player\n";
    file_put_contents("dados.log", $data, FILE_APPEND);
}
?>
