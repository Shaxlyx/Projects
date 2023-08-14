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

body{
    display: flex;
    justify-content: center;
    align-items: center;height: 100vh;
    font-family: 'Nunito', sans-serif;
}
.form{
    width: 300px;
    padding: 32px;
    border-radius: 10px;
    box-shadow: 0 4px 16px #ccc;
    letter-spacing: 1px;
}
.form__input,
.form__button{
    letter-spacing: 1px;
    font-size: 16px;
}
.form__title{
    text-align: center;
    margin: 0 0 32px 0;
    font-size: 26px;
    font-weight: 700;
}
.form__group{
    position: relative;
    margin-bottom: 32px;
}
.form__label{
    position: absolute;
    top: 0;
    z-index: -1;
    color: #9e9e9e;
    transition: 0.3s;
}
.form__input{
    width: 100%;
    padding: 0 0 10px 0;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    background-color: transparent;
    outline: none;
    transition: 0.3s;
}
.form__input:focus{
    border-bottom: 1px solid #1a73a8;
}
.form__button{
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    color: #000;
    background-color: #efefef;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 700;
}
.form__button:focus,
.form__button:hover{
    background-color: #111;
    color: #fff;
}
p{
    top: 49%;
    position: absolute;
    font-size: 20px;
    left: 62%;
}