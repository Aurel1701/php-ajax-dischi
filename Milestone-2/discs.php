<?php

// importo data.php per chiamata api
include "./data.php";

// specifica che le informazioni inviate .json 
header("Content-Type: application/json");

//trasformo il mio array php in oggetti json 
echo json_encode($discs);


?>