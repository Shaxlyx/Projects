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
    height: 100%;
    background-image: (../img)
}
.header{
    height: 10%;
    width: 100%;
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
.container {
    max-width: 1380px;
    margin: 35px auto;
    /*margin-top: 60px;*/
}
.header__group{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.header__icon {
    margin-right: 14%;
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
.search{
    /*width: 450px;*/
    /*height: 30px;*/

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




.wrap {
    margin-top: 25px;
}
h1{
    font-family: 'Nunito', sans-serif;
    font-size: 36px;
    font-weight: 700;

}
.informBlock {
    margin-top: 25px;
    box-sizing: border-box;
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(5, 236px);
    grid-template-rows: repeat(5, 325px);
    grid-column-gap: 48px;
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
    padding: 0px 0 0px 4px;
}

.main__text h5 {
    font-family: 'Nunito', sans-serif;
    font-size: 26px;
    color: #2f3134;
}

.main__text p {
    font-family: 'Nunito', sans-serif;
    font-size: 20px;
    /*margin-top: 10px;*/
    color: #5F6369;
}
@media screen and (max-width: 1378px){
    h1{
        margin-left: 15px;
    }
    .informBlock {
        grid-template-columns: repeat(4, 236px);
        grid-template-rows: repeat(4, 325px);
    }
}
@media screen and (max-width: 1262px){
    /*.logo{*/
    /*    margin-left: 10%;*/
    /*}*/
    /*.header__icon {*/
    /*    margin-right: 10%;*/
    /*}*/
    h1{
        margin-left: 30px;
    }
    .header__icon .search{
        width: 350px;
    }
    .list-unstyled{
        width: 350px;
    }
    /*.informBlock {*/
    /*    grid-template-columns: repeat(4, 236px);*/
    /*    grid-template-rows: repeat(10, 325px);*/
    /*}*/
}
@media screen and (max-width: 1091px){
    .logo{
        margin-left: 10%;
    }
    .header__icon {
        margin-right: 5%;
    }
    .informBlock {
        grid-template-columns: repeat(3, 236px);
        grid-template-rows: repeat(4, 325px);
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
@media screen and (max-width: 809px) {
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
    }
    @media screen and (max-width: 525px) {
        .informBlock {
            grid-template-columns: repeat(1, 236px);
            grid-template-rows: repeat(9, 325px);
        }
        .header__group{
            margin-top: 15px;
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
@media screen and (max-width: 445px){
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
}




