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
    /*min-width: 760px;*/
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
}
.header{
    /*height: 40%;*/
    width: 100%;
    max-width: 1920px;
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("../img/6.jpg");
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: fixed;
}
.flex{
    display: flex;
    align-items: center;
    padding:2rem;
    justify-content: space-between;
    position: fixed;
    max-width: 100%;
    margin:0 auto;
    top:0; left:0; right:0;
    z-index: 1000;
    box-shadow: 0px 0px 14px 5px #ccc ;
    background-color: #fff;
}
.logo{
    font-family: 'Nunito', sans-serif;
    font-size: 2.5rem;
    color: #c00;
    font-weight: 700;
    margin-left: 14%;
}
.logo span{
    font-family: 'Nunito', sans-serif;
    font-size: 2.5rem;
    color: #000;
    font-weight: 700;
}
.hi_group{
    /*position: absolute;*/
    /*top: 15%;*/
    /*left: 28%;*/
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.hi_title{
    font-family: 'Nunito', sans-serif;
    font-size: 7.8rem;
    line-height: 1;
    letter-spacing: -0.06em;
    font-weight: 500;
    text-align: center;
    margin-top: 133px;
}
.hi_title h1{
    color: #cc0000;

}
.hi_title span{
    color: white;

}
/*.hi_info{*/
/*    width: 800px;*/
/*}*/
.hi_info p{
    font-family: 'Nunito', sans-serif;
    font-size: 40px;
    line-height: 1;
    letter-spacing: -0.06em;
    font-weight: 300;
    text-align: center;
    margin-top: 10px;
    color: white;
    margin-bottom: 5%;
}
.container {
    max-width: 1350px;
    margin: 0px auto;
}
.header__group{
    /*display: flex;*/
    /*height: 70px;*/
    /*justify-content: center;*/
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 35px;
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
    margin-right: 14%;

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
    /*margin-right: 50px;*/
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
/*.header__menu{*/
/*    padding: 35px 0 0 0px;*/
/*}*/
.header__menu input{
    display: block;
    border: none;
    width: 60px;
    background-color: #fff;
    padding: 7px 0 0px 5px;
    font-size: 16px;
    border-bottom: 2px solid #111;
    margin-right: 25px;
}
.filter{
    padding: 10px 20px 10px 20px;
    letter-spacing: 1px;
    font-size: 16px;
    border: none;
    border-radius: 24px;
    color: #fff;
    background-color: #111;
    outline: none;
    cursor: pointer;
    transition: 0.3s;

    margin-right: 10px;
}
.form{
    display: flex;
}
.form select{
    transition: 0.3s;
    font-size: 16px;
    width: 165px;
    border: none;
    border-bottom: 2px solid #111;
    background-color: transparent;
    outline: none;
    margin-right: 35px;
    font-family: 'Nunito', sans-serif;
}
form a{
    color: #000000;
    border-radius: 24px;
    background-color: #e1e1e1;
    text-align: center;
    padding: 13px;
    margin-left: 1%;
    font-size: 14px;
}
main{
    height: 100%;

}

.wrap {
    margin-top: 50px;
}

.informBlock {
    box-sizing: border-box;
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(7, 236px);
    grid-template-rows: repeat(5, 325px);
    grid-column-gap: 16px;
    grid-row-gap: 30px;
}

.informBlock img {
    width: 236px;
    height: 236px;
    position: absolute;
}
.informBlock a{
    box-shadow: 0px 0px 14px 5px #ccc;
}
.otstyp{
    cursor: pointer;
}
.main__text{
    width: 236px;
    height: 75px;
    background-color: #ffffff;
    position: relative;
    top: 243px;
    border-radius: 10px;
    padding: 0px 0 0px 10px;
}

.main__text h5 {
    font-size: 26px;
    color: #2f3134;
}

.main__text p {
    font-size: 20px;
    /*margin-top: 10px;*/
    color: #5F6369;
}

@media screen and (max-width: 1670px){
    .logo{
        margin-left: 16.5%;
    }
    .header__icon {
        margin-right: 14%;
    }
    .informBlock {
        grid-template-columns: repeat(6, 236px);
        grid-template-rows: repeat(6, 325px);
    }
}
@media screen and (max-width: 1515px){
    .logo{
        margin-left: 13%;
    }
    .informBlock {
        grid-template-columns: repeat(5, 236px);
        grid-template-rows: repeat(8, 325px);
    }
}
@media screen and (max-width: 1262px){
    .logo{
        margin-left: 10%;
    }
    .header__icon {
        margin-right: 10%;
    }
    .header__icon .search{
        width: 350px;
    }
    .list-unstyled{
        width: 350px;
    }
    .informBlock {
        grid-template-columns: repeat(4, 236px);
        grid-template-rows: repeat(10, 325px);
    }
}
@media screen and (max-width: 1000px){
    .logo{
        margin-left: 10%;
    }
    .header__icon {
        margin-right: 5%;
    }
    .informBlock {
        grid-template-columns: repeat(3, 236px);
        grid-template-rows: repeat(13, 325px);
    }
    .form select {
        font-size: 12px;
        width: 132px;
        margin-right: 15px;
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
}
@media screen and (max-width: 800px) {
    .logo{
        margin-left: 10%;
    }
    .header__icon {
        margin-right: 5%;
    }
    .hi_title {
        font-size: 3.8rem;
    }

    .hi_info p {
        font-size: 20px;
        margin-bottom: 7%;
    }

    .header__icon .search {
        width: 250px;
    }

    .list-unstyled {
        width: 250px;
    }
}
@media screen and (max-width: 740px){
    .header__group{
        margin-top: 15px;
    }
    .wrap{
        margin-top: 30px;
    }
    .flex{
        display: flex;
        justify-content: center;
    }
    .header__icon {
        margin-right: 0%;
    }
    .logo{
        margin-left: 0%;
        margin-right: 5%;
    }
    /*.header__icon {*/
    /*    margin-right: 5%;*/
    /*}*/

    .form{
        display: grid;
        grid-template-columns: repeat(3, 130px);
        grid-template-rows: repeat(2, 38px);
        grid-column-gap: 16px;
        grid-row-gap: 10px;
    }
    .informBlock {
        grid-template-columns: repeat(2, 236px);
        grid-template-rows: repeat(21, 325px);
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
}
@media screen and (max-width: 489px){
    .informBlock {
        grid-template-columns: repeat(1, 236px);
        grid-template-rows: repeat(42, 325px);
    }
}
@media screen and (max-width: 445px){
    .form{
        display: grid;
        grid-template-columns: repeat(2, 130px);
        grid-template-rows: repeat(3, 38px);
        grid-column-gap: 16px;
        grid-row-gap: 10px;
    }
    .header__menu input {
        margin-left: 25%;
    }
    .logo{
        margin-left: 0%;
        margin-right: 8%;
    }
    .hi_title {
        font-size: 2.8rem;
    }
    .hi_info p {
        font-size: 16px;
        margin-bottom: 7%;
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
    .wrap {
        margin-top: 20px;
    }
    .list-unstyled {
        width: 112px;
        height: 27px;
    }
    #list {
        top: 60px;
    }
}