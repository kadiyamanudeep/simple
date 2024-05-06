<?php


$contentForm = $_POST;

foreach ($contentForm as $name => $value) {

    if ('submit' != $name) {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        echo '<p>' . ucfirst($name) . " = " . $value . '</p>';
    }
}
