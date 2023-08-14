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

@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');

:root{
    --purple:;
    --red:#c0392b;
    --orange:#f39c12;
    --black:#333;
    --white:#fff;
    --light-color:#666;
    --light-white:#ccc;
    --light-bg:#f5f5f5;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    transition:all .2s linear;
}

*::selection{
    
}

*::-webkit-scrollbar{
    height: .5rem;
    width: 1rem;
}

*::-webkit-scrollbar-track{
    background-color: transparent;
}

*::-webkit-scrollbar-thumb{
    background-color: var(--purple);
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

body{
    font-family: 'Nunito', sans-serif;
}

section{
    padding:3rem 2rem;
}

.title{
    text-align: center;
    margin-bottom: 2rem;
    /*text-transform: uppercase;*/
    color:var(--black);
    font-size: 4rem;
}

.empty{
    padding:1.5rem;
    text-align: center;
    border:var(--border);
    background-color: var(--white);
    color:var(--red);
    font-size: 2rem;
}

.message{
    position: sticky;
    top:0;
    margin:0 auto;
    max-width: 1200px;
    background-color: var(--light-bg);
    padding:2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 10000;
    gap:1.5rem;
}

.message span{
    font-size: 2rem;
    color:var(--black);
}

.message i{
    cursor: pointer;
    color:var(--red);
    font-size: 2.5rem;
}

.message i:hover{
    transform: rotate(90deg);
}

.btn,
.option-btn,
.delete-btn,
.white-btn{
    display: inline-block;
    margin-top: 1rem;
    padding:1rem 2rem;
    cursor: pointer;
    color: black;
    font-size: 1.8rem;
    border-radius: .5rem;
    text-transform: capitalize;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
    opacity: 0.5;
}

.white-btn,
.btn{
    background-color: #efefef;
    font-weight: 700;
}

.option-btn{
    background-color: #efefef;
    font-weight: 700;
}

.delete-btn{
    background-color: red;
    color: white;
    font-weight: 700;
}

.white-btn:hover{
    background-color: var(--white);
    color:var(--black);
}

@keyframes fadeIn {
    0%{
        transform: translateY(1rem);
        opacity: .2s;
    }
}

.header{
    position: sticky;
    top:0; left:0; right:0;
    z-index: 1000;
    background-color: var(--white);
    box-shadow: var(--box-shadow);
}

.header .flex{
    display: flex;
    align-items: center;
    padding:2rem;
    justify-content: space-between;
    position: relative;
    max-width: 1200px;
    margin:0 auto;
}

.header .flex .logo{
    font-family: 'Nunito', sans-serif;
    font-size: 2.5rem;
    color: #c00;
    font-weight: 700;
}

.header .flex .logo span{
    font-family: 'Nunito', sans-serif;
    font-size: 2.5rem;
    color: #000;
    font-weight: 700;
}

.header .flex .navbar a{
    margin:0 1rem;
    font-size: 2rem;
    color:var(--black);
}

.header .flex .navbar a:hover{
    color:var(--purple);
}

.header .flex .icons div{
    margin-left: 1.5rem;
    font-size: 2.5rem;
    cursor: pointer;
    color:var(--black);
}

.header .flex .icons div:hover{
    color:var(--purple);
}

.header .flex .account-box{
    position: absolute;
    top:120%; right:2rem;
    width: 30rem;
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding:2rem;
    text-align: center;
    border-radius: .5rem;
    border:var(--border);
    background-color: var(--white);
    display: none;
    animation:fadeIn .2s linear;
}

.header .flex .account-box.active{
    display: inline-block;
}

.header .flex .account-box p{
    font-size: 2rem;
    color:var(--light-color);
    margin-bottom: 1.5rem;
}

.header .flex .account-box p span{
    color:var(--purple);
}

.header .flex .account-box .delete-btn{
    margin-top: 0;
}

.header .flex .account-box div{
    margin-top: 1.5rem;
    font-size: 2rem;
    color:var(--light-color);
}

.header .flex .account-box div a{
    color:var(--orange);
}

.header .flex .account-box div a:hover{
    text-decoration: underline;
}

#menu-btn{
    display: none;
}

.dashboard .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
    max-width: 1200px;
    margin:0 auto;
    align-items: flex-start;
}

.dashboard .box-container .box{
    border-radius: 0.5rem;
    padding:2rem;
    background-color: var(--white);
    box-shadow: 0px 0px 14px 5px #ccc;

    text-align: center;
}

.dashboard .box-container .box h3{
    font-size: 5rem;
    color:var(--black);
}

.dashboard .box-container .box p{
    margin-top: 1.5rem;
    padding:1.5rem;
    color: #000000;
    font-size: 2rem;
    border-radius: .5rem;

}

.add-products form{
    background-color: var(--white);
    border-radius: .5rem;
    padding:2rem;
    text-align: center;
    box-shadow: 0 4px 16px #ccc;

    max-width: 50rem;
    margin:0 auto;
}

.add-products form h3{
    font-size: 2.5rem;
    /*text-transform: uppercase;*/
    color:var(--black);
    margin-bottom: 1.5rem;
}

.add-products form .box{
    width: 100%;
    border-radius: .5rem;
    margin:1rem 0;
    padding:1.2rem 1.4rem;
    color:var(--black);
    font-size: 1.8rem;
    border-bottom: 1px solid #e0e0e0;
}

.show-products .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, 30rem);
    justify-content: center;
    gap:1.5rem;
    max-width: 1200px;
    margin:0 auto;
    align-items: flex-start;
}

.show-products{
    padding-top: 0;
}

.show-products .box-container .box{
    text-align: center;
    padding:2rem;
    border-radius: .5rem;
    border:var(--border);
    box-shadow: var(--box-shadow);
    background-color: var(--white);
}

.show-products .box-container .box img{
    height: 30rem;
}

.show-products .box-container .box .name{
    padding:1rem 0;
    font-size: 2rem;
    color:var(--black);
}

.show-products .box-container .box .price{
    padding:1rem 0;
    font-size: 2.5rem;
    color:var(--red);
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

.edit-product-form form img{
    height: 25rem;
    margin-bottom: 1rem;
}

.edit-product-form form .box{
    margin:1rem 0;
    padding:1.2rem 1.4rem;
    border:var(--border);
    border-radius: .5rem;
    background-color: var(--light-bg);
    font-size: 1.8rem;
    color:var(--black);
    width: 100%;
}

.orders .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, 30rem);
    justify-content: center;
    gap:1.5rem;
    max-width: 1200px;
    margin:0 auto;
    align-items: flex-start;
}

.orders .box-container .box{
    background-color: var(--white);
    padding:2rem;
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
}

.orders .box-container .box p{
    padding-bottom: 1rem;
    font-size: 2rem;
    color:var(--light-color);
}

.orders .box-container .box p span{
    color:var(--purple);
}

.orders .box-container .box form{
    text-align: center;
}

.orders .box-container .box form select{
    border-radius: .5rem;
    margin:.5rem 0;
    width: 100%;
    background-color: var(--light-bg);
    border:var(--border);
    padding:1.2rem 1.4rem;
    font-size: 1.8rem;
    color:var(--black);
}

.users .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, 30rem);
    justify-content: center;
    gap:1.5rem;
    max-width: 1200px;
    margin:0 auto;
    align-items: flex-start;
}

.users .box-container .box{
    background-color: var(--white);
    padding:2rem;
    box-shadow: 0px 0px 14px 5px #ccc;
    border-radius: .5rem;
    text-align: center;
}

.users .box-container .box p{
    padding-bottom: 1.5rem;
    font-size: 2rem;
    color:var(--light-color);
}

.users .box-container .box p span{
    color: #000;
}

.users .box-container .box .delete-btn{
    margin-top: 0;
}

.messages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, 35rem);
    justify-content: center;
    gap:1.5rem;
    max-width: 1200px;
    margin:0 auto;
    align-items: flex-start;
}

.messages .box-container .box{
    background-color: var(--white);
    padding:2rem;
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
}

.messages .box-container .box p{
    padding-bottom: 1.5rem;
    font-size: 2rem;
    color:var(--light-color);
    line-height: 1.5;
}

.messages .box-container .box p span{
    color:var(--purple);
}

.messages .box-container .box .delete-btn{
    margin-top: 0;
}


.wrap {
    margin-top: 50px;
}

.informBlock {
    box-sizing: border-box;
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(7, 236px);
    grid-template-rows: repeat(4, 325px);
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
    top: 250px;
    border-radius: 10px;
    padding: 0px 0 0px 10px;
    letter-spacing: 0.075rem;
}

.main__text h5 {
    font-size: 26px;
    color: #2f3134;
}

.main__text p {
    font-size: 20px;
    margin-top: 10px;
    color: #5F6369;
}

/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .header .flex .navbar{
        position: absolute;
        top:99%; left:0; right:0;
        background-color: var(--white);
        border-top: var(--border);
        border-bottom: var(--border);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .flex .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    .header .flex .navbar a{
        margin:2rem;
        display: block;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .title{
        font-size: 3rem;
    }

}