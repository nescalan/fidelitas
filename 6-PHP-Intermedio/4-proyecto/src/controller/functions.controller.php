<?php #functions.php

# Checks if the user has an active session
function checkSession()
{
    if (isset($_SESSION['user'])) {
        # Redirect to index.php
        header("Location: index.php");
    }
}

# Sanitize Form - Security Phrase
function sanitizePhrase($pPhrase)
{
    $pPhrase = htmlspecialchars($pPhrase);
    $pPhrase = trim($pPhrase);
    $pPhrase = stripslashes($pPhrase);
    $pPhrase = strip_tags($pPhrase);
    $pPhrase = filter_var($pPhrase, FILTER_SANITIZE_STRING);
    return $pPhrase;
}

# Sanitize Password
function sanitizePassword($pPassword)
{
    $pPassword = htmlspecialchars($pPassword);
    return $pPassword;
}

# Check the session of each page
function redirectToActivity($requireOnceFile)
{
    if (isset($_SESSION['user'])) {
        # redirect to actividad.php
        require_once $requireOnceFile;
    } else {
        # Redirect to login.php
        header('Location: login.php');
    }
}




?>