<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <h2>Money Conversion Project</h2>

    <form action="Client.php" method="post">

        <div class="form-group">
            <label for="usr">Money Amount:</label>
            <input type="number" class="form-control" id="usr" name="amount">
        </div>

        <div class="form-group">
            <label for="sel1">Source Money Type</label>
            <select class="form-control" id="sel1" name="source">
                <option value="AED">AED</option>
                <option value="AFN">AFN</option>
                <option value="ALL">ALL</option>
                <option value="USD">USD</option>
                <option value="LKR">LKR</option>
            </select>
            <br>
        </div>

        <div class="form-group">
            <label for="sel2">Target Money Type</label>
            <select class="form-control" id="sel2" name="target">
                <option value="AED">AED</option>
                <option value="AFN">AFN</option>
                <option value="ALL">ALL</option>
                <option value="USD">USD</option>
                <option value="LKR">LKR</option>
            </select>
            <br>
        </div>

        <button type="submit" class="btn btn-info" name="submit">Convert</button>
    </form>


    <?php if(isset($_GET['message'])){ ?>

        <div class="alert alert-primary" role="alert"><b><?php echo $_GET['message'];?></b></div>

    <?php }?>

</div>

</body>

</html>
