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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

    <!--    Bootstrap 4 glyphicons-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!--    font-awesome in Bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<style>


    .sticky-notes-container {
        display: flex;
        flex-wrap: wrap;

    }


    div > textarea {
        display: block;
        width: 100%;
        height: 81%;
        border: none;
        resize: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    /*For laptops and large screens*/

    @media (min-width: 1025px) and (max-width: 1380px) {

        .font-heading {
            font-size: 40px !important;
        }

        .btn-circle {
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 25px;

        }

    }

    /*##Device = Tablets, Ipads (portrait)*/
    /*##Screen = B/w 768px to 1024px*/

    @media (min-width: 768px) and (max-width: 1024px) {
        .font-heading {
            font-size: 35px !important;
        }

        .btn-circle {
            width: 45px;
            height: 45px;
            text-align: center;
            border-radius: 22px;

        }
    }

    /*
   ##Device = Low Resolution Tablets, Mobiles (Landscape)
   ##Screen = B/w 481px to 767px
    */
    @media (min-width: 481px) and (max-width: 767px) {
        .font-heading {
            font-size: 30px !important;
        }

        .btn-circle {
            width: 40px;
            height: 40px;
            text-align: center;
            border-radius: 22px;

        }

    }

    @media (min-width: 320px) and (max-width: 480px) {
        .font-heading {
            font-size: 25px !important;
        }

        .btn-circle {
            width: 36px;
            height: 36px;
            text-align: center;
            border-radius: 19px;

        }

    }

    @media (min-width: 240px) and (max-width: 320px) {
        .font-heading {
            font-size: 22px !important;
        }

        .btn-circle {
            width: 31px;
            height: 31px;
            text-align: center;
            border-radius: 15px;

        }

        .btn-add {
            font-size: 19px !important;
        }
    }

</style>
<body class="">
<div>
    <i class=" font-heading fa fa-sticky-note  m-5  " style="color: #0069D9; "> Sticky Notes</i>

    <button class="btn  btn-circle  btn-outline-primary float-right m-5  btn-add-note" id="addNotes">
        <i class=" btn-add fa fa-plus" style="font-size: 25px"></i>
    </button>

</div>
<hr>


<div id="container" class="sticky-notes-container  " style="">

    <div id="Div_Element_1" class="sticky-note border border-info m-5  bg-white   " style="width: 30vh; height:40vh;  ">

        <header class="border " style=" background-color: #F7F7F7 ">
            <button type='button' class='btn-close-note float-right  mr-3 close'>
                <i class="fa fa-times-circle  m-2 " style="font-size: 25px; color: #0069D9"></i>
            </button>
            <button type='button' class=' btn-add-note close  float-left ml-3' id="addNote">
                <i class="fa fa-plus-circle  m-2 " style="font-size: 25px; color: #0069D9"></i>
            </button>
            <hr class="mt-3">
        </header>


        <div name="text"  style="height: 100%;"><textarea></textarea></div>


    </div>
</div>


<script>

    // This function will new append Div
    $(document).ready(function () {

        // add new note
        $(".btn-add-note").click(function () {

            // Here we gives new ID to child Div
            var numberOfStickyNotes = document.getElementsByClassName("sticky-note").length;

            var newStickyNote = $('#Div_Element_1').clone(true);

            newStickyNote.find('textarea').val('');
            newStickyNote.attr('id', 'Div_Element_' + (numberOfStickyNotes + 1));

            newStickyNote.appendTo('.sticky-notes-container');
            // newStickyNote.draggable();
        });

        // remove existing note
        $(".btn-close-note").click(function () {
            // console.log(document.getElementsByClassName("btn-close-note"));
            $(this).closest('.sticky-note').remove();
        });

    });


   $(document).ready(function () {
           var get_data = $("#Div_Element_1").find('textarea').val();
            if(get_data != ' ' )  
           {
             
            // function() {           // on completion, restart
           setTimeout( $.ajax({
                   type: "POST",
                   url: "backend.php",
                    data:{bodyText:get_data},  
                    dataType:"text", 
                    success: function(data) {
                    return data;
                }


             }), 10000);  // function refers to itself
             // } 
             // $.ajax({
             //       type: "POST",
             //       url: "backend.<php",
             //        data:{bodyText:get_data},  
             //        dataType:"text", 


             // });
             // console.log(get_data);
           }
           
    

    });
       
// function() {           // on completion, restart
//        setTimeout( $.ajax({
//                    type: "POST",
//                    url: "backend.<php",
//                     data:{bodyText:get_data},  
//                     dataType:"text", 


//              }), 30000);  // function refers to itself
//     }


</script>

</body>

</html>
