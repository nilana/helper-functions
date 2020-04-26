<?php
if (!function_exists('get_month_name')) {

    function get_month_name($month_number){
        return DateTime::createFromFormat('!m', (string)$month_number )->format('F');
    }
}
?>