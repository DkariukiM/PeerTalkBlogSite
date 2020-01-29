<?php
/**
 * Created by PhpStorm.
 * User: David Kariuki
 * Date: 1/24/2020
 * Time: 8:40 AM
 */
?>
<style>
    .loader-wrapper
    {
        background: black;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        position: fixed;
        align-items: center;
        width: 100%;
        height: 100vh;
        z-index: 100000000;
    }
    .loader
    {
        width: 142px;
        height: 142px;
        padding: 0;
        margin: 250px auto;
        animation: rotate 10s infinite linear;
        list-style: none;
        position: relative;
    }

    .loader li
    {
        border:6px solid transparent;
        border-bottom: none;
        transform-origin: 50% 100% 0;
        position: absolute;
        top: 50%;
        left: 50%;
        animation: rotate 3s infinite cubic-bezier(0.09,0.6,0.8,0.03);
    }

    .loader li:nth-child(1)
    {
        width: 44px;
        height: 22px;
        margin: -22px 0 0 -22px;
        border-color: #2172b8;
        border-top-left-radius: 36px;
        border-top-right-radius: 36px;
        animation-timing-function: cubic-bezier(0.09,0.3,0.12,0.03);
    }

    .loader li:nth-child(2)
    {
        width: 58px;
        height: 29px;
        margin: -29px 0 0 -29px;
        border-color: #18a39b;
        border-top-left-radius: 42px;
        border-top-right-radius: 42px;
        animation-timing-function: cubic-bezier(0.09,0.6,0.24,0.03);
    }

    .loader li:nth-child(3)
    {
        width: 72px;
        height: 36px;
        margin: -36px 0 0 -36px;
        border-color: #82c545;
        border-top-left-radius: 48px;
        border-top-right-radius: 48px;
        animation-timing-function: cubic-bezier(0.09,0.9,0.36,0.03);
    }
    .loader li:nth-child(4)
    {
        width: 86px;
        height: 43px;
        margin: -43px 0 0 -43px;
        border-color: #f8b739;
        border-top-left-radius: 54px;
        border-top-right-radius: 54px;
        animation-timing-function: cubic-bezier(0.09,1.2,0.48,0.03);
    }


    .loader li:nth-child(5)
    {
        width:100px;
        height: 50px;
        margin: -50px 0 0 -50px;
        border-color: #f06045;
        border-top-left-radius: 60px;
        border-top-right-radius: 60px;
        animation-timing-function: cubic-bezier(0.09,1.5,0.6,0.03);
    }

    .loader li:nth-child(6)
    {
        width:114px;
        height: 57px;
        margin: -57px 0 0 -57px;
        border-color: #ed2861;
        border-top-left-radius: 66px;
        border-top-right-radius: 66px;
        animation-timing-function: cubic-bezier(0.09,1.8,0.72,0.03);
    }

    .loader li:nth-child(7)
    {
        width:128px;
        height: 64px;
        margin: -64px 0 0 -64px;
        border-color: #c12680;
        border-top-left-radius: 66px;
        border-top-right-radius: 66px;
        animation-timing-function: cubic-bezier(0.09,2.1,0.84,0.03);
    }

    @keyframes rotate
    {
        100%
        {
            transform: rotate(360deg);
        }
    }
</style>
<body>
<div class="loader-wrapper">
    <ul class="loader">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script>
        $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow")
        });

    </script>
</div>
</body>