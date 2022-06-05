<?php 

function get_var($key) {
    if(isset($_POST[$key])) {
        return $_POST[$key];
    }
}

function get_select($key,$value) {
    if(isset($_POST[$key]) == $value) {
        return "selected";
    }
}

function esc($var) {
    return htmlspecialchars($var);
}