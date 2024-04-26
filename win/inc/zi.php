<?php

$conn = mysqli_connect('localhost', 'root', '', 'win');

if (!$conn) {
    echo ('Connection failed: ' . mysqli_connect_error());
}