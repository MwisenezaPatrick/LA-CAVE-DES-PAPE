<?php 
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<div class="sideBar">
        <div class="logo">
            <p>La cave des pape</p>
        </div>
        <div class="menu">
            <a href="dashboard.html"><i class="fa fa-tachometer" aria-hidden="true"></i>dashboard</a>
            <a href="customers.html"><i class="fa fa-users" aria-hidden="true"></i> customers</a>
            <a href="products.html"><i class="fa fa-database" aria-hidden="true"></i>products</a>
            <a href="orders.html"><i class="fa fa-check-circle" aria-hidden="true"></i>orders</a>
            <a href="messages.html"><i class="fa fa-comments" aria-hidden="true"></i>messages</a>
            <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>sign out</a>
        </div>
    </div>

    <header class="header">
        <div class="icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="input">
            <input type="search" placeholder="search ...">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <div class="image">
            <img src="...images/cl1.jpg" >
            <p>Patrick</p>
        </div>
    </header>

    <div class="table-container">
        <h1>Contact Messages</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");

                $sql = "SELECT name, email, subject, message FROM contact_messages";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                                <td>" . htmlspecialchars($row['subject']) . "</td>
                                <td>" . htmlspecialchars($row['message']) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No messages found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
