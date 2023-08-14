<?php
    header('content-type: text/css');
?>
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
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    height: 100%;
    min-width: 1210px;
}
header{
    width: 100%;

}
.container {
    max-width: 1180px;
    margin: 0px auto;

}

/*форма*/
.uploud__form{
    display: flex;
    margin: 100px 0 0 0;
    border-radius: 10px;
    box-shadow: 0 4px 16px #ccc;

    height: 100%;
    letter-spacing: 1px;

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
.form_2{
    width: 1180px;
    margin: 20px;
    font-size: 22px;
}
.form_2 p{
    margin: 0 0 25px 0;
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
    border-bottom: 2px solid #1a73a8;
}
.uploud__form textarea{
    width: 100%;
    margin: 20px 0 32px 0;
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
.send_1{
    padding: 10px 20px 10px 20px;
    margin: 10px 0;
    letter-spacing: 1px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    color: #fff;
    background-color: #0071f0;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    width: 200px;
    text-align: center;
}
.send_1 a{
    color: #e0e0e0;
}