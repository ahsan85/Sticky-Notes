<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Sticky Notes</title>
    <!--    // Bootstrap CDN Link-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--    Bootstrap 4 glyphicons-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!--    font-awesome in Bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script>

        // This function will new append Div
        $(document).ready(function () {
            $("#addNotes").click(function () {
                let html = " <div id=\"c\" class=\"border border-info m-5  bg-white \" style=\"width: 30vh; height:40vh; \">\n" +
                    "\n" +
                    "    <header class=\"border \" style=\" background-color: #F7F7F7 \">\n" +
                    "        <button type='button' class=' float-right  mr-3 close fragment'>\n" +
                    "            <i class=\"fa fa-times  m-2 \" style=\"font-size: 20px; color: #0069D9\"></i>\n" +
                    "        </button>\n" +
                    "        <button  type='button' class='close  float-left ml-3' name=\"addNotes\">\n" +
                    "            <i class=\"fa fa-plus  m-2 \" style=\"font-size: 20px; color: #0069D9\"></i>\n" +
                    "        </button>\n" +
                    "        <hr class=\"mt-3\">\n" +
                    "    </header>\n" +
                    "\n" +
                    "</div> ";
                $("#container").append(html);
            });

        });

        // This function will close div
        $(document).ready(function () {
            $('.fragment i').on('click', function (e) {
                $(e.target).closest('div').remove();
            });
        });

    </script>


</head>
<style>
    .btn-circle {
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 25px;

    }

    .sticky-notes-container {
        display: flex;
        flex-wrap: wrap;

    }
</style>
<body style="background-color:#FFFFFF">
<div>
    <i class="fa fa-sticky-note  m-5" style="color: #0069D9; font-size: 40px"> Sticky Notes</i>

    <button class="btn  btn-circle  btn-outline-primary float-right m-5 " id="addNotes">
        <i class="fa fa-plus" style="font-size: 25px"></i>
    </button>

</div>
<hr>




<div id="c" class="border border-info m-5  bg-white " style="width: 30vh; height:40vh;  ">

    <header class="border " style=" background-color: #F7F7F7 ">
        <button type='button' class=' float-right  mr-3 close fragment'>
            <i class="fa fa-times  m-2 " style="font-size: 20px; color: #0069D9"></i>
        </button>
        <button  type='button' class='close  float-left ml-3' name="addNotes">
            <i class="fa fa-plus  m-2 " style="font-size: 20px; color: #0069D9"></i>
        </button>
        <hr class="mt-3">
    </header>

</div>

<div id="container" class="sticky-notes-container " style=""></div>

</body>

</html>
