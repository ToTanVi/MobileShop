<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Email</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);
        #main {
            margin: 25px auto;
            font-family: 'Roboto', sans-serif;
        }
        
        h2 {
            text-align: center;
            border-radius: 10px 10px 0 0;
            padding: 0;
            color: black;
            font-weight: bolder;
            font-size: 1.5em;
        }
        
        #login {
            background-color: #FEFFED;
            border-radius: 5px;
            border: 2px solid #ccc;
            padding: 1rem;
            max-width: 500px;
            margin-top: 0;
            margin: 0 auto;
        }
        
        input[type=text],
        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            padding-left: 5px;
            font-size: 16px;
            box-sizing: border-box
        }
        
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            padding-left: 5px;
            margin-bottom: 5px;
            font-size: 16px;
            box-sizing: border-box
        }
        
        input[type=submit] {
            width: 100%;
            background-color: #1100FF;
            color: white;
            border: 2px solid #1100FF;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 40px;
        }
        
        #para {
            clear: both;
            margin: 0 35%;
        }
    </style>
</head>

<body>
    <div id="main">
        <div id="login">
            <h2>Basic</h2>
            <form action="?action=sendemail" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="From" name="email" />
                <input type="text" placeholder="To" name="toid" />
                <input type="text" placeholder="Subject" name="subject" />
                <textarea rows="4" cols="50" placeholder="Vui lòng nhập nội dung email ..." name="message"></textarea>
                <hr>
                <input type="submit" value="Gửi" name="send" />
            </form>
        </div>
    </div>

</body>

</html>