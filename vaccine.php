<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child vaccine details</title>
    <style>*{
        background-color:rgb(168, 168, 168);
    }
        header{
    height: 15vh;
}
    .vansh1{
        width: 33vw;
        float: left;
    }
    .vansh2{
        width: 33vw;
        float: left;
    }
    .vansh3{
        width: 30vw;
        float: right;
    }
    .vansh4{
        height:30vh;
        width: 33vw;
        float: left;
    }
    .vansh5{
        height:30vh;
        width: 64vw;
        float: right;
    }
    .vansh6{
        height:20vh;
        width: 33vw;
        float: left;
    }
    .vansh7{
    height:20vh;
    width: 27vw;
    float: left;
}
.vansh8{
    height:20vh;
    width: 37vw;
    float: right;
}
.float{
position:fixed;
width:12vw;
height:60px;
bottom:40px;
right:40px;
background-color:#0C9;
color:#FFF;
border-radius:50px;

box-shadow: 2px 2px 3px #999;
font-size: 4vh;
text-align: left;}
.my-float{
	margin-top:22px;
}
    </style>
</head>
<body>
    	

    <header>
    <h1>Vaccine Records</h1>
    <h2>TYPE 'YES' IF VACCINE DONE ELSE 'NO'</h2>
    <p>Last Updated:<br>
    <input type ="date" name="date"> </p>
    </header>
    <form method="post" action="childvaccphp.php" >
    <div class="vansh">
    <br><br><br><h3>Dose given within 24 hours</h3>
        
       
        Oral Polio Dose: 
        
        BCG:<input type="text" name="opd" id ="opd">
        <br>
        Hippie. B. Birth dose:<input type="text" name="hb" id ="hb">
    </div>
    <br>
    <div class="vansh1">
        <h3>Doses in 1st month</h3>
        <form action>
        
            <label>Oral Polio 1</label><input type="text" name="op1" id ="op1">
            <br>
            <label>Penta-1 (DPT + HPB)</label><input type="text" name="p1" id =
            <br>
            <label >IPV</label><input type="text" name="ipv" id ="ipv">
          </form>
    </div>
    <div class="vansh2">
        <h3>Doses in 2nd month</h3>
        <br>
        Oral Polio 2:<input type="text" name="op2" id ="op2">
        <br>
        Penta-2 (BPT + Hipab + Hip)<input type="text" name="p2" id ="p2">
    </div>
    <div class="vansh3">
        <h3>Doses in 3rd month</h3>
        <br>
        Oral Polio 3:<input type="text" name="op3" id ="op3">
        <br>
        Penta-3 (DPTHB)<input type="text" name="p3" id ="p3">
        <br>
        IPV-2<input type="text" name="ipv2" id ="ipv2">
    </div>
<br>
<br><br><br><br><br><br><br><br>
    <div class="vansh4">
        <h3>Doses in 9th month</h3>
        <br>
        Gowar-1<input type="text" name="g1" id ="g1">
        <br>
        Vitamin-1<input type="text" name="v1" id ="v1">
        <br>
        JE-1<input type="text" name="je1" id ="je1">
    </div>
    <div class="vansh5">
        <h3>Doses done between 16-24 months</h3>
    
        Measles<input type="text" name="m" id ="m">
        <br>
        Vitamin-2<input type="text" name="v2" id ="v2">
        <br>
        JE-2<input type="text" name="je2" id ="je2">
        <br>
        Oral Polio (Booster)<input type="text" name="opb" id ="opb">
        <br>
        DPT (First Dose)<input type="text" name="dpt1" id ="dpt1">
    </div>
    
    <div class="vansh6">
        <h3>Doses done between 5-6 years</h3>
        <br>
        DPT (Second Dose)<input type="text" name="dpt2" id ="dpt2">
    </div>
    <div class="vansh7">
        <h3>Doses done in 10th year</h3>
        <br>
        TT (First Dose)<input type="text" name="tt1" id ="tt1">
    </div>
    <div class="vansh8">
        <h3>Doses done in 16th year</h3>
        <br>
        TT (Second Dose)<input type="text" name="tt2" id ="tt2">
    </div>
    <div class="vansh9">
        <h3>Doses of Vitamin-O (24-60) months</h3>
        <br>
        Vitamin A3(24 months)<input type="text" name="v3" id ="v3">
        <br>
        Vitamin A4(30 months)<input type="text" name="v4" id ="v4">
       <br>
        Vitamin A5(36 months)<input type="text" name="v5" id ="v5">
        <br>
        Vitamin A6(42 months)<input type="text" name="v6" id ="v6">
        <br>
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    

</form>
</body>
</html>