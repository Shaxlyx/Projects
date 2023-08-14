<?php
    header('content-type: text/css');
?>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500;700&display=swap');
*{
    padding: 0;
    margin: 0;
    border: 0;
}

*, *:before, *:after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

:focus, :active {
    outline: none;
}

a:focus, a:active {
    outline: none;
}

nav, footer, header, aside {
    display: block;
}

html, body {
    height: 100%;
    width: 100%;
    font-size: 100%;
    line-height: 1;
    font-size: 14px;
    -ms-text-size-adjust: 100%;
    -moz-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

input, button, textarea {
    font-family: inherit;
}

input::-ms-clear {
    display: none;
}

button {
    cursor: pointer;
}

button::-moz-focus-inner {
    padding: 0;
    border: 0;
}

a, a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

ul li {
    list-style: none;
}

img {
    vertical-align: top;
}

h1, h2, h3, h4, h5, h6 {
    font-size: inherit;
    font-weight: inherit;
}

body {
    font-family: 'Nunito', sans-serif;
    font-weight: 500;
    height: 100%;
    min-width: 308px;
}
.container {
    max-width: 1180px;
    margin: 0 auto;
}
header{
    width: 100%;
}
.flex{
    display: flex;
    align-items: center;
    padding:2rem;
    justify-content: space-around;
    position: fixed;
    max-width: 100%;
    margin:0 auto;
    top:0; left:0; right:0;
    z-index: 1;
    box-shadow: 0px 0px 14px 5px #ccc ;
    background-color: #fff;
}
.logo{
    font-family: 'Nunito', sans-serif;
    font-size: 2.5rem;
    color: #c00;
    font-weight: 700;
}
.logo span{
    font-family: 'Nunito', sans-serif;
    font-size: 2.5rem;
    color: #000;
    font-weight: 700;
}
.header__group{
    display: flex;
    /*height: 70px;*/
    justify-content: space-between;
}

.header__icon .search{
    background-color: #e1e1e1;
    display: block;
    border: none;
    width: 450px;
    height: 48px;
    padding: 5px 0 5px 23px;
    font-size: 20px;
    border-radius: 24px 0 0 24px;

}
.header__group input::placeholder{
    font-size: 20px;
}
.header__icon{
    margin: 0px 0 0 85px;   
}
.header__icon .pusk{
    background-image: url("../img/search.png");
    background-repeat: no-repeat;
    background-position: center;
    background-color: #e1e1e1;
    width: 48px;
    height: 48px;
    border-radius: 0 24px 24px 0;
    cursor: pointer;
    z-index: 1;
}
.header__icon form{
    display: flex;
}
#list{
    position: absolute;
    top: 75px;
    z-index: 2;
}
ul{
    cursor: pointer;
    width: 450px;
}
li{
    padding: 12px;
    font-size: 20px;
    border-radius: 24px;
    border: 2px solid #e1e1e1;
    margin-top: 3px;
    background-color: #ffffff;
    /*border-radius: 24px;*/
    /*background-color: #e1e1e1;*/
}


.genshtab{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 15%;
    /*height: 600px;*/
    background-color: #fff;
    border-radius: 24px;
    box-shadow: 0px 0px 14px 5px #ccc;
}
.genshtab img{
    padding: 1% 1%;
    /*width: 50%;*/
    /*height: 100%;*/
    border-radius: 24px;
    cursor: pointer;
}
.mod__text{
    padding: 1%;
    /*width: 50%;*/
    font-family: 'Nunito', sans-serif;
    line-height: 1;
    letter-spacing: -0.06em;
    font-weight: 300;
}
.mod__text h1{
    font-size: 36px;
    color: #000000;
    font-weight: 700;
    text-align: center;
}
.mod__text p{
    /*margin-top: 1%;*/
    font-size: 26px;
    padding-top: 1%;
}
.inf__text{
    margin-top: 2%;
    font-family: 'Nunito', sans-serif;
    line-height: 1;
    letter-spacing: -0.06em;
    font-weight: 300;
}
.inf__text h1{
    text-align: center;
    font-size: 36px;
    color: #000000;
    font-weight: 700;
}
.inf__text p{
    font-size: 20px;
    padding-top: 1%;
}




//modal-window//
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.9);
}

.modal-content {
    margin: auto;
    display: block;
    width: 100%;
    max-width: 1200px;
    height: 800px;
}

.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}


/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
@media screen and (max-width: 1262px){
    .header__icon .search{
        width: 350px;
    }
    .list-unstyled{
        width: 350px;
    }
    .modal-content {
        width: auto;
        height: auto;
        max-width: 1180px;
    }
}
@media screen and (max-width: 1180px){
    .container{
        max-width: 1091px;
    }
    .modal-content {
        width: auto;
        height: auto;
        max-width: 1091px;
    }

}
@media screen and (max-width: 1091px){
    .container{
        max-width: 890px;
    }
    /*.genshtab img{*/
    /*    height: 80%;*/
    /*}*/
    .mod__text h1{
        font-size: 28px;
    }
    .inf__text h1{
        font-size: 28px;
    }
    .mod__text p{
        font-size: 20px;
    }
    .logo{
        margin-left: 0%;
    }
    .header__icon {
        margin-right: 5%;
    }
    .filter{
        font-size: 12px;
    }
    form a{
        font-size: 12px;
    }
    .header__menu input{
        font-size: 14px;
    }
    .header__menu input::placeholder{
        font-size: 14px;
    }
    .modal-content {
        width: auto;
        height: auto;
        max-width: 890px;
    }
}
@media screen and (max-width: 890px) {
    .container{
        max-width: 630px;
    }
    .genshtab{
        height: auto;
        margin-top: 20%;
    }
    /*.genshtab img{*/
    /*    height: 80%;*/
    /*}*/
    .mod__text h1{
        font-size: 20px;
    }
    .inf__text h1{
        font-size: 20px;
    }
    .mod__text p{
        font-size: 14px;
    }
    .inf__text{
        margin-top: 2%;
    }
    .logo{
        margin-left: 3%;
        margin-right: 3%;
    }
    .header__icon {
        margin-right: 0%;
    }
    .header__icon{
        margin: 0px 0 0 0px;
    }
    .flex{
        display: flex;
        justify-content: center;
    }
    .header__icon .search {
        width: 250px;
    }
    .list-unstyled {
        width: 250px;
    }
    .informBlock {
        grid-template-columns: repeat(2, 236px);
        grid-template-rows: repeat(5, 325px);
    }
    .modal-content {
        width: auto;
        height: auto;
        max-width: 630px;
    }
}
@media screen and (max-width: 630px) {
    .container{
        max-width: 445px;
    }
    .flex{
        display: flex;
        justify-content: center;
    }
    .genshtab{
        margin-top: 25%;
    }
    .header__icon {
        margin-right: 0%;
    }
    .logo{
        margin-left: 0%;
        margin-right: 5%;
    }
    .header__icon .search {
        width: 150px;
        height: 35px;
    }
    .header__icon .pusk{
        height: 35px;
    }
    .list-unstyled {
        width: 250px;
    }
    .hi_title{
        margin-top: 100px;
    }
    .inf__text{
        margin-bottom: 2%;
    }
    .modal-content {
        width: auto;
        height: auto;
        max-width: 445px;
    }
}
@media screen and (max-width: 445px){
    .container{
        max-width: 300px;
    }
    .genshtab{
        margin-top: 35%;
    }
    .header__menu input {
        margin-left: 25%;
    }
    .logo{
        margin-left: 0%;
        margin-right: 8%;
    }
    .header__icon .search{
        width: 112px;
        height: 27px;
        margin-top: 5px;
        padding: 5px 0 5px 16px;
    }
    .logo span {
        font-size: 1.5rem;
    }
    .logo {
        font-size: 1.5rem;
    }
    .header__icon .pusk{
        height: 27px;
        margin-top: 5px;
    }
    .list-unstyled {
        width: 112px;
        height: 27px;
    }
    #list {
        top: 60px;
    }
    .mod__text h1 {
        font-size: 18px;
    }
    .mod__text p {
        font-size: 12px;
    }
    .modal-content {
        width: auto;
        height: auto;
        max-width: 345px;
    }
}