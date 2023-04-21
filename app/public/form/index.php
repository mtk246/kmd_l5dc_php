<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get and Post</title>
</head>
<body>
    <h3>Get Method</h3>
    <form action="./get.php" method="get">
        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <input type="submit" value="Submit">
        </div>
    </form>

    <h3>Post Method</h3>
    <form action="./post.php" method="post">
        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>