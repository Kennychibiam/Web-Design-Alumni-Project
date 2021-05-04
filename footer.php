<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
footer{ 
    position: fixed;
    bottom: 0;
}
@media (max-height:800px){
    footer { position: static;}
}
.the-footer{
    background-color: #000000;
    box-sizing: border-box;
    width: 100%
    text-align: left;
    font: bold 12px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}
.the-footer .footer-left,
.the-footer .footer-center,
.the-footer .footer-right{
    display: inline-block;
    vertical-align: top;
}
.the-footer .footer-left{
    width:30%
}
.the-footer h4{
     color: #daa520;
     font: normal 26px sans-serif;
     margin: 0;
}
.the-footer .footer-left img{
    width: 30%;
}

.the-footer .footer-company{
    color: #ffffff;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}
.the-footer .footercenter{
    width:25%;
}
.the-footer .footer-center i{
    color: #ffffff;
    font-size: 25px;
    width: 28px;
    height: 28px;
    border-radius: 50%
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}
.the-footer .footer-center p{
    display: inline-block;
    color: #daa520;
    vertical-align: middle;
    margin: 0;
}
.the-footer .footer-center p span{
    display: block;
    font-weight: normal;
    font-size: 12px;
    line-height:2;
}
.thefooter .footer-center p a{
    color: #c71585;
    text-decoration: none;
}
.the-footer .footer-company-about{
    line-height: 20px;
    color: #ffffff;
    font-size: 13px;
    font-weight: normal:
    margin: 0
}
.the-footer .footer-company-about span{
    display: block;
    color: #daa520;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}
.the-footer .footer-icons{
    margin-top: 25px;
}
.the-footer .footer-icons a{
    display: inline-block:
    width: 35px;
    height: 35px:
    cursor: pointer;
    border-radius: 2px;

    font-size: 20px;
    color: #daa520;
    text-align: center;
    line-height:35px;

    margin-right: 3px;
    margin-bottom: 5px;
}
@media (max-width: 880px) {
    .the-footer .footer-left,
    .the-footer .footer-center,
    .the-footer .footer-right{
        display: block:
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .the-footer .footer-center i{
        margin-left: 0;
    }
}
</style>
</head>
<body>
<footer class="the-footer">
                    <div class="footer-left">
                       <img src="alumnicon.png">
                       <h4>About<span>ALUMNI DONATE</span></h4>
                       <p class="footer-company">&#169 2021 ALUMNI DONATE ltd.</p>
                    </div>

                    <div class="footer-center">
                       <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span> University Road,
                               Akoka, Lagos.</span></p>
                       </div>
                       <div>
                        <i class="fa fa-phone"></i>
                        <p> +234820348934</p>
                       </div>
                       <div>
                         <i class="fa fa-envelope"></i>
                         <p><a href="mailto:support@alumnidonate.com"> support@alumnidonate.com</a></p>
                       </div>
                    </div>

                    <div class="footer-right">
                       <p class="footer-company-about">
                               <span>About the company</span>
                               We help facilitate the donation of items, provided by the Alumnis of the school.</p>
                       <div class="footer-icons">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                       </div>
                   </div>
</footer>
</body>
</html>