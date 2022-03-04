<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Kids - Doctor</title>
    <style>
        *{
            margin: 78px;
            padding-left: 12vw;
            background-color: rgb(168, 168, 168);
        }
        button{
            display: flex;
            flex-direction: column;
            align-content: center;
            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: rgb(89, 73, 180);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
        }  
        button:hover {
    background-color: rgba(59, 0, 220, 0.698);
    }
    button:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgb(52, 9, 207);
    }
    .float{
	position:fixed;
	/* width:60px; */
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	
	box-shadow: 2px 2px 3px #999;
    font-size: 4vh;
    text-align: left;

}

/* .my-float{ */
	/* margin-top:22px; */
/* } */
    </style>
</head>
<body>
    <button type="button" align="center" onclick="window.location.href='http://127.0.0.1:5500/Child%20vaccine%20details.html'">Child Vaccine Details</button>
    <button type="button" align="center" onclick="window.location.href='doctorprojchild.php'">Child Information</button>
    <!-- <a href="#" class="float"> -->
        <!-- <i align="center" class="icons">Edit</i> -->
        <!-- </a> -->
</body>
</html>