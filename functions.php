<?php
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
};
  function number_correct($number){
   $number_ceil = ceil($number);
    if($number_ceil < 1000){
        return $number_ceil ." ₽";
    }
    $final_price = number_format($number_ceil, 0, ',', ' ');
    return $final_price." ₽";
};
function esc($str) {
    $text = htmlspecialchars($str);

    return $text;
};
?>