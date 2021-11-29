<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <title>Lot Size Calculator</title>
</head>
<style>
    .head{
        color: rgb(29, 94, 235);
        padding: 10px 0 10px 0 ;
    }
    #lot{
        display:inherit;
        flex-direction:row;
        align-items:center;
        padding:15px;
        width:40%;
        position:absolute;
        font-size:20px;
        left:30%;
    }
    .label-primary {
   background-color: #578bffe0;
    }
</style>
<body>
    <header class="head">
        <center> <h1>Lot Size Calculator</h1><center>
    </header><br><br>

    <div class="container">

        <div class="label label-primary" id="lot">
            <label for="date" >Lot Size</label>
        </div>
    </div>

    
</body>

</html>