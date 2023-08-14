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
:root{
    --black:#333;
    --white:#fff;
    --light-color:#666;
    --light-white:#ccc;
    --light-bg:#efefef;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}
body {
    font-family: 'Nunito', sans-serif;
    height: 100%;
    min-width: 1330px;
}
header{
    width: 100%;

}
.container {
    max-width: 1180px;
    margin: 0px auto;

}
.header__group{
    display: flex;
    height: 70px;
}

.header__group input{
    display: block;
    border: none;
    width: 450px;
    height: 25px;
    background-color: #fff;
    margin: 25px 0 0 0px;
    padding: 0px 0 5px 10px;
    font-size: 16px;
    border-bottom: 2px solid #1a73a8;
}
.search{
    width: 450px;
    height: 30px;
}
.header__menu{
    padding: 35px 0 0 0;
    display: flex;
    justify-content: right;
}
.topnav a{
    padding: 10px;
    background-color: #efefef;
    border-radius: 24px;
    color: black;
    font-weight: 700;
}

.gallerySection{

}

.uploud__form{
    display: flex;
    margin: 40px 0 0 0;
    border-radius: 10px;
    box-shadow: 0 4px 16px #ccc;
    height: 100%;
    letter-spacing: 0.5px;

}
.uploud__form h2{
    text-align: center;
    margin: 0 0 20px;
    font-size: 32px;
}
.form{
    width: 1180px;
    margin: 20px;
    font-size: 22px;

}
.uploud__form input{
    width: 100%;
    margin: 32px 0;
    padding: 0 0 10px 0;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    background-color: transparent;
    outline: none;
    transition: 0.3s;
    font-size: 16px;
}
.uploud__form input:focus{
    border-bottom: 2px solid black;
}
.uploud__form textarea{
    width: 100%;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    background-color: transparent;
    outline: none;
    transition: 0.3s;
    font-size: 16px;
}
.uploud__form textarea:focus{
    border-bottom: 2px solid #1a73a8;
}
.uploud__form select{
    transition: 0.3s;
    font-size: 16px;
    margin: 32px 0;
    padding: 0 0 10px 0;
    width: 260px;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    background-color: transparent;
    outline: none;
}



.send{
    padding: 10px 20px 10px 20px;
    letter-spacing: 1px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    color: black;
    background-color: #efefef;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 700;
}
.send a{
    color: #e0e0e0;
}


.wrap {
    margin-top: 50px;
    display: flex;
    justify-content: center;
}

.informBlock {
    /*box-sizing: border-box;*/
    /*display: grid;*/
    /*grid-template-columns: repeat(4, 1fr);*/
    /*grid-template-rows: repeat(4, 1fr);*/
    /*grid-column-gap: 60px;*/
    /*grid-row-gap: 250px;*/
    box-sizing: border-box;
    /*margin-left: 80px;*/
    display: grid;
    grid-template-columns: repeat(4, 236px);
    grid-template-rows: repeat(4, 325px);
    grid-column-gap: 16px;
    grid-row-gap: 30px;
}

.informBlock img {
    /*width: 250px;*/
    /*height: 250px;*/
    /*position: absolute;*/
    /*box-shadow: 0 4px 16px #ccc;*/
    /*border-radius: 7px;*/
    width: 236px;
    height: 236px;
    position: absolute;
    cursor: pointer;
}
.informBlock button{
    background-color: #efefef;
    z-index: 2;
    width: 80px;
    height: 30px;
    text-align: center;
    position: absolute;
    top: 31px;
    left: 143px;
    color: black;
    font-weight: 700;
    border-radius: 24px;
}
.necaif{
    background-color: #efefef;
    width: 90px;
    height: 30px;
    text-align: center;
    position: absolute;
    bottom: 280px;
    left: 143px;
    color: black;
    font-weight: 700;
    border-radius: 24px;
    padding-top: 8px;
}
.caif{
    box-shadow: 0px 0px 14px 5px #ccc;
}
.otstyp{

}
.main__text{
    /*width: 250px;*/
    /*height: 75px;*/
    /*background-color: #bbccd5;*/
    /*position: relative;*/
    /*top: 165px;*/
    /*border-radius: 10px;*/
    /*padding: 10px;*/
    /*opacity: .7;*/
    width: 236px;
    height: 75px;
    background-color: #ffffff;
    position: relative;
    top: 250px;
    border-radius: 10px;
    padding: 0px 0 0px 10px;
}

.main__text h5 {
    /*color: black;*/
    /*font-size: 20px;*/
    font-size: 20px;
    color: #2f3134;
}

.main__text p {
    /*color: black;*/
    /*font-size: 16px;*/
    /*margin-top: 15px;*/
    font-size: 18px;
    margin-top: 10px;
    color: #5F6369;
}

.edit-product-form{
    min-height: 100vh;
    background-color: rgba(0,0,0,.7);
    display: flex;
    align-items: center;
    justify-content: center;
    padding:2rem;
    overflow-y: scroll;
    position: fixed;
    top:0; left:0;
    z-index: 1200;
    width: 100%;
}

.edit-product-form form{
    width: 50rem;
    padding:2rem;
    text-align: center;
    border-radius: .5rem;
    background-color: var(--white);
}
.edit-product-form form h1{
    font-size: 30px;
}
.edit-product-form form img{
    height: 25rem;
    margin-bottom: 1rem;
}

.edit-product-form form .box{
    margin: 10px 0;
    padding:1.2rem 1.4rem;
    border-bottom: 1px solid #e0e0e0;
    font-size: 1.8rem;

    width: 100%;
}
.btn,
.option-btn{
    display: inline-block;
    margin-top: 1rem;
    padding: 1rem 2rem;
    cursor: pointer;
    color: black;
    font-size: 1.8rem;
    border-radius: 0.5rem;
    text-transform: capitalize;
    font-weight: 700;
}

@keyframes fadeIn {
    0%{
        transform: translateY(1rem);
        opacity: .2s;
    }
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
/*@media screen and (max-width: 1652px){*/
/*    .informBlock {*/
/*        grid-template-columns: repeat(4, 236px);*/
/*        grid-template-rows: repeat(6, 325px);*/
/*    }*/
/*    .wrap{*/
/*        margin-left: 72px;*/
/*    }*/
/*}*/