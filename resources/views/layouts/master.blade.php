<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Transactions</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <ul class="nav nav-pills">
                <li><a href="/transactions">All Transactions</a></li>
                <li><a href="/transactions/create">Add Transaction</a></li>
            </ul>
            @yield('content')

        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>