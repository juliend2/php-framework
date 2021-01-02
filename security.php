<?php

// DEPENDENCIES:
// - Flight microframework

function logged_in() {
  return isset($_COOKIE['loginkey']) && $_COOKIE['loginkey'] == COOKIE_KEY;
}


function logout() {
  unset($_COOKIE['loginkey']);
  setcookie('loginkey', NULL, -1);
  Flight::redirect('/');
}


function protect() {
  if (!logged_in()) {
    Flight::redirect('/login');
  }
}

