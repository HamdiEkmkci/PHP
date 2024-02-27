<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handle</title>

    <style>
        #form-1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .input {
            margin: 2px;
            width: 50%;
        }

        form label {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            align-self: flex-start;
            margin-left: 20px;
            transform: translateY(100%);
        }
    </style>
</head>

<body>

    <div style="margin-top:200px;display:flex;justify-content:center;">
        <div style="border-radius:20px;width:400px;height:300px;">
            <div style="margin-left:29%;">
            <h2 style="color:green;">CONTACT ME</h2>
            </div>
            <form id="form-1" action="./contact_form_handle.php" method="POST">
                <label for="name" style="">Name:</label>
                <input class="input" type="text" name="name" placeholder="please specify your name">
                <label for="email" style="">Email:</label>
                <input class="input" type="text" name="email" placeholder="please specify your email">
                <label for="message" style="">Message:</label>
                <textarea class="input" name="message" placeholder="please write your message" rows="4"></textarea>
                <input type="submit"><br><br>

                <?php
                if(!empty($_GET["submitted"])){
                    if($_GET['submitted'] == 'false'){
                        echo "all fields are required";
                    }else{
                        echo "your form has been submitted successfully!";
                    }
                }
                ?>
            </form>
        </div>
    </div>


</body>

</html>