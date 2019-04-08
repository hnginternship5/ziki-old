<?php 
session_start();
if(isset($_POST['themeMode']))
{
    if($_POST['themeMode'] == 'dark' )
    {
        $_SESSION['themeMode']='dark';
    }
    elseif($_POST['themeMode'] == 'light')
    {
        $_SESSION['themeMode']='light';
    }
}
