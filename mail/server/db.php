<?php

$db = new mysqli("localhost", "root", "", "mail");

if ($db) {
    echo "connection successful";
}
