<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" type="image" href="contact-solid-24.png">
    <!-- <link rel="stylesheet" href="new1.css"> -->
<style>
body{
    /* height: 100%;
    width: 100%; */
    text-align: center;
    /* overflow-x: hidden; */
}
h1{
    color: White;
    background-color: rgba( 0, 0, 0, 0.2);
    padding: 1%;
    width: 160px;
    border-radius: 7%;
}
.wrapper{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}
.wrapper .icon{
    margin: 0 20px;
    text-align: center;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: relative;
    z-index: 2;
    transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.slink{
    text-decoration: none;
    color: #fff;
    font-size: 25px;
}
.wrapper .icon i{
    display: block;
    height: 60px;
    width: 60px;
    background: transparent;
    border-radius: 50%;
    position: relative;
    z-index: 2;
    box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
    transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon i{
    line-height: 60px;
    font-size: 25px;
}
.wrapper .icon .tooltip{
    position: absolute;
    top: 0;
    z-index: 1;
    background: #fff;
    color: #fff;
    padding: 10px 18px;
    font-size: 20px;
    font-weight: 500;
    border-radius: 25px;
    opacity: 0;
    pointer-events: none;
    box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
    transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip{
    top: -70px;
    opacity: 1;
    pointer-events: auto;
}
.icon .tooltip:before{
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    background: #fff;
    left: 50%;
    bottom: -6px;
    transform: translateX(-50%) rotate(45deg);
    transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover i{
    color: #fff;
}
.wrapper .icon:hover i,
.wrapper .icon:hover .tooltip{
    text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
}
.wrapper .facebook:hover i,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip:before{
    background: #3B5999;
}
.wrapper .instagram:hover i,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip:before{
    background: #f09433; 
    background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
    background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
}
.wrapper .twitter:hover i,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip:before{
    background: #1da1f2;
}
.wrapper .linkedin:hover i,
.wrapper .linkedin:hover .tooltip,
.wrapper .linkedin:hover .tooltip:before{
    background: #0A66C2;
}
.wrapper .github:hover i,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip:before{
    background: #333;
}
.wrapper .whatsapp:hover i,
.wrapper .whatsapp:hover .tooltip,
.wrapper .whatsapp:hover .tooltip:before{
    background-color: #25d366;
}
/* @media screen and (max-width:700px){
.wrapper{
    display: flex;
    flex-wrap: wrap;
}
} */
    </style>
</head>
<body>

    <?php
include 'navbar.php'
?>
    <h1>Contact</h1>
    <div class="wrapper">
                <br>
                <div class="icon facebook">
            <div class="tooltip">Facebook</div>
                <a class="slink" href="https://www.facebook.com/subha.saha.1675275?mibextid=ZbWKwL" target="_blank">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                </div>
                <div class="icon instagram">
            <div class="tooltip">Instagram</div>
                <a class="slink" href="https://www.instagram.com/subhadip__saha?igsh=MW50MzZ0eDg4OW9ncw=="
                    target="_blank">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                </div>
                <div class="icon twitter">
            <div class="tooltip">Twitter/X</div>
                <a class="slink" href="https://x.com/SubhadipSa36778?t=6Zs0H8Z35XGj1fCqD11OYA&s=09" target="_blank">
                    <i class='bx bxl-twitter'></i>
                </a>
                </div>
                <div class="icon linkedin">
            <div class="tooltip">Linkedin</div>
                <a class="slink" href="https://www.linkedin.com/in/subhadip-saha-69a179214?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                    target="_blank">
                    <i class='bx bxl-linkedin'></i>
                </a>
                </div>
                <div class="icon github">
            <div class="tooltip">Github</div>
                <a class="slink" href="https://github.com/Subhadipsahaa" target="_blank">
                    <i class='bx bxl-github'></i>
                </a>
                </div>
                <div class="icon whatsapp">
            <div class="tooltip">Whatsapp</div>
                <a class="slink" href="https://wa.me/qr/P3XI7CYPIWSIC1" target="_blank">
                    <i class='bx bxl-whatsapp' ></i>
                </a>
                </div>
                </div>
            </div>
</body>
</html>