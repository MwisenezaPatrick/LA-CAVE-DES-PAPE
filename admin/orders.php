<?php
// Any PHP logic or includes can be placed here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
     <div class="sideBar">
        <div class="logo">
            <p>La cave des pape</p>
        </div>
        <div class="menu">
            <a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>dashboard</a>
            <a href="customers.php"><i class="fa fa-users" aria-hidden="true"></i> customers</a>
            <a href="products.php"><i class="fa fa-database" aria-hidden="true"></i>products</a>
            <a href="orders.php"><i class="fa fa-check-circle" aria-hidden="true"></i>orders</a>
            <a href="messages.php"><i class="fa fa-comments" aria-hidden="true"></i>messages</a>
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
            <img src="../images/cl2.jpg" alt="Patrick's Image">
            <p>Patrick</p>
        </div>
    </header>
    <div class="container">
        <div class="flex">
            <p>all orders <i class="fa fa-angle-double-right" aria-hidden="true"></i></p> 
            <a href="#" class="plus">+</a>
        </div>

        <table class="order-table">
            <tr>
                <th><h3>product</h3></th>
                <th><h3>price</h3></th>
                <th><h3>quantity</h3></th>
                <th><h3>subtotal</h3></th>
                <th><h3>tax</h3></th>
                <th><h3>total</h3></th>
                <th><h3>payment</h3></th>
                <th><h3>status</h3></th>
                <th><h3>customer</h3></th>
                <th><h3>more details</h3></th>
            </tr>
            <tr>
                <td><p>VEUVE CLICQUOT</p></td>
                <td><p>KES 33,132.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 66,264.00</p></td>
                <td><p>KES 600.00</p></td>
                <td><p>KES 66,864.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status del">delivered</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>SAINT PEY</p></td>
                <td><p>KES 13,200.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 52,800.00</p></td>
                <td><p>KES 600.00</p></td>
                <td><p>KES 53,400.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status del">delivered</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>MOET & CHANDON</p></td>
                <td><p>KES 13,613.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 27,226.00</p></td>
                <td><p>KES 613.00</p></td>
                <td><p>KES 27,839.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status ret">return</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>DOM PERIGNON </p></td>
                <td><p>KES 43,613.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 87,226.00</p></td>
                <td><p>KES 613.00</p></td>
                <td><p>KES 87,839.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status pend">pending</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>VEUVE CLICQUOT</p></td>
                <td><p>KES 33,132.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 66,264.00</p></td>
                <td><p>KES 600.00</p></td>
                <td><p>KES 66,864.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status del">delivered</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>SAINT PEY</p></td>
                <td><p>KES 13,200.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 52,800.00</p></td>
                <td><p>KES 600.00</p></td>
                <td><p>KES 53,400.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status del">delivered</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>MOET & CHANDON</p></td>
                <td><p>KES 13,613.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 27,226.00</p></td>
                <td><p>KES 613.00</p></td>
                <td><p>KES 27,839.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status ret">return</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
            <tr>
                <td><p>DOM PERIGNON </p></td>
                <td><p>KES 43,613.00</p></td>
                <td><p>2</p></td>
                <td><p>KES 87,226.00</p></td>
                <td><p>KES 613.00</p></td>
                <td><p>KES 87,839.00</p></td>
                <td><p>paid</p></td>
                <td><p class="status pend">pending</p></td>
                <td><p>Mwiseneza</p></td>
                <td><p class="details">details</p></td>
            </tr>
        </table>
    </div>
    <!-- JavaScript at the end of the body -->
    <script src="script.js"></script>
</body>
</html>
