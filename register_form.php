
<?php require_once('./config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Basketball Reservation System</title>
    <link rel="stylesheet" href="register_style.css">
<Style>

@import url('https://fonts.googleapis.com/css2?family=Poppons:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #0080FF;
}

.wrapper{
    position: relative;
    width: 450px;
    height: 25rem;
    background: #fff;
    border: 1px solid #191b1d;
    box-shadow: 0 0 10px #191b1d;
    border-radius: 5px;
      
}


.close {
    position:absolute;
    top: 5px;
    float: right;
    right: 5px;
    text-decoration: none;
    font-size: 20px;
    background: #000;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    z-index: 10;
    cursor: pointer;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s ease;
    opacity: 0.5;
    }

    .close:hover{
     opacity: 1;
    }

.banner {
    position: relative;
    height: 100px;
    background: red;  
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    }
    .banner::after {
    content: "";
    background-color: rgba(0, 0, 0, 0.2); 
    position: absolute;
    width: 100%;
    height: 100%;
    }
    
.form-box h1{
        font-size: 50px;
        color: #0D1847;
        font-family: sans-serif;
        
       
    }

.form-box span{
        background: #0D1847;
        color: #F5AF43;
        padding: 10px 20px;
        font-family: sans-serif;
    
    }

#wrapper-register{
    position: relative;
    width: 470px;
    height: 40rem;
    background: #fff;
    border: 1px solid  #191b1d;
    box-shadow: 0 0 10px #191b1d;
    border-radius: 5px;
      
}

.wrapper .form-box {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.wrapper .form-box.login {
    left: 0;
    padding: 0 50px 0 50px;
}

.wrapper .form-box.login .animation {
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .9s ease;
   
}

.wrapper .form-box.register {
    left: 0;
    padding: 0 50px 0 50px;
}


.wrapper .form-box.register .animation {
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .9s ease;
   
}

.form-box .input-box {
    position: relative;
    width: 100%;
    height: 40px;
    margin: 20px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #000; 
    padding-right: 23px;
    font-size: 16px;
    color:#000;
    font-weight: 500;
    transition: .5s;
}

.input-box input:focus,
.input-box input:valid { 
    border-bottom-color: #0080FF;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%); 
    font-size: 16px;
    color: #000;
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
    color: #000;
    margin-left: 5px;
    font-size: 13px;
   
}


.btn {
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid  #052840;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color:#fff;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;
}
.btn::before {
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background: linear-gradient(#081b29, #0080FF, #081b29, #000);
    z-index: -1;
    transition: .5s;
}

.btn:hover::before {
    top: 0;
}

.form-box .logreg-link {
    font-size: 14.5px;
    color: #000;
    text-align: center;
    margin: 20px 0 10px;
}

.logreg-link p a {
    color:  #6495ed;
    text-decoration: none;
    font-weight: 800;
    margin-left: 10px;
	letter-spacing: 1px;
   
}


.logreg-link p a:hover {
    text-decoration: underline;
}


</Style>
</head>

<body>

    <div class="wrapper" id="wrapper-register">
        <div class="form-box register">
            <form action="#" method="post">
                <div class="banner">
                    <h1>HOOP<span>BOOK</h1>
                </div>    
                <div class="input-box animation">
                    <input type="text" name="firstname" id="firstname" autocomplete="off" required>
                    <label>First Name</label>
                </div>
                
                <div class="input-box animation">
                    <input type="text" name="lastname"  id="lastname" autocomplete="off" required>
                    <label>Last Name</label>
                </div>

                <div class="input-box animation">
                <input type="text" name="contact" id="contact" min="0" max="999999999999"  required>
                    <label>Contact #</label>
                </div>

                <div class="input-box animation">
                    <input type="email" name="email" id="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box animation">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box animation">
                    <input type="password" name="cpassword" id="cpassword" required>
                    <label>Confirm Password</label>
                </div>
                
                <button type="submit" class="btn animation" name="submit">Sign Up</button>
                <div class="logreg-link animation">
                    <p>Already have an account? <a href="<?php echo base_url.'login_form.php' ?>" 
                    class="">Login</a></p> 
                </div>
            </form>
        </div>

    </div>
    
</body>
</html>