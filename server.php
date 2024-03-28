<?php
if (isset($_POST["email"]) && isset(($_POST["password"])) && isset($_POST["full_name"])) {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone_number = $_POST["phone_number"];
    $country = $_POST["country"];
    $age = $_POST["age"];

    $response = array("status" => "success", "message" => "You have successfully registered");
    header("HTTP/1.0 201 OK");
    echo json_encode($response);
} elseif (empty($_POST["email"]) || empty(($_POST["password"])) || empty($_POST["full_name"])) {
    $response = array(
        "status" => "failed", "message" => "All fields are required"
    );
    header("HTTP/1.0 403 Forbidden");
    echo json_encode($response);
} else {
    $response = array(
        "status" => "success", "failed" => "All fields are required"
    );
    header("HTTP/1.0 403 Forbidden");
    echo json_encode($response);
}
