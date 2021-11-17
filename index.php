<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prajwal </title>
    <link rel="stylesheet" type="text/css" media="all" href="index.css" />
</head>
<body>
    <div class="parent">
        <div class="child-left">
            <img src="cod1.jpeg" height="208px" width="300px" alt="cod1"><br>
            <img src="cod2.jpeg" height="208px" width="300px" alt="cod2"><br>
            <img src="cod3.jpeg" height="208px" width="300px" alt="cod3">
        </div>
        <div class="child-right">
            <center><img src="download.png"  alt="codilar"></center>
            <div class="child-right-center">
                <h2 align="center">Login To Codilar</h2>

                <form action="submit.php" method="POST"> 

                    <table>
                        <tr>
                    <td><label > User Name:</label></td>
                    <td><input type="text" name="username" placeholder="Enter User Name"></td>
                    </tr>
                    <tr>
                    <td><label > Email:</label></td>
                    <td><input type="email" name="email" placeholder="Enter email"></td>
                    </tr>
                    <tr>
                    <td><label> Password:</label></td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
                    </tr>
                    </table><br>
                    <input type="checkbox" class="remember me" name="remember me" value="remember me">
                    <label>Remember me</label>
                    <a href="#" class="forgotpassword" ><u>Forgot password</u></a><br><br>
                    <input type="Submit"  value="Register" class="login" >
                    </form>
                    <p class="or">or</p>

                    <form  action="https://accounts.google.com/signin">
                        <button class="gmail"  type="submit">Register in With gmail</button>
                    </form> 

                    <br>

                    <form  action="https://www.facebook.com/">
                        <button class="facebook" type="submit">Register in With facebook</button>
                    </form><br>
                    <?php if(isset($_GET['flag'])){ ?> <div class="flag"> Fields Cant be blank</div><?php } ?>
                    <?php if(isset($_GET['flag1'])){ ?> <div class="flag1"> Email already Registred</div><?php } ?>
            </div>
        </div>
    </div>
</body>
</html>