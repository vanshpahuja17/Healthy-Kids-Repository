<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Kids - Doctor</title>
    <style>
        *{
            
            /* padding1-left: 9vw; */
      
            padding-left: 21vw;
        }
                
            
        body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
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
<br><br><br><br><br><br>
<button type="button" align="center" onclick="window.location.href='you1.php'">Enter Vaccine Details</button>
<br><br><br>
<!-- <form method="POST" action="vaccineinfo.php"></form> -->
    <button type="button" align="center" onclick="window.location.href='vaccinesearch.php'">Child Vaccine Details</button>
    <br><br><br>
    <!-- <form method="POST" action="childinfo.php"></form> -->
    <button type="button" align="center" onclick="window.location.href='childsearch.php'">Child Information</button>
<br><br>
    <a href="index.html"><button align=center>Back To Home Page</button></a>
    <!-- <a href="#" class="float"> -->


    </body>
</html>