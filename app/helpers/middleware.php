<?php
/**
 * Created by PhpStorm.
 * User: David Kariuki
 * Date: 1/29/2020
 * Time: 11:08 AM
 */
function usersOnly($redirect = '/index.php')
{
if (empty($_SESSION['id']))
{
    $_SESSION['message'] = 'You need to log in first';
    $_SESSION['type'] = 'error';
    header('location: ' . BASE_URL . $redirect);
    exit();


}
}

function adminOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin']))
    {
        $_SESSION['message'] = 'You are not authorized';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit();


    }
}

function guestsOnly($redirect = '/index.php')
{
    if (isset($_SESSION['id']))
    {
        header('location: ' . BASE_URL . $redirect);
        exit();
    }
}
