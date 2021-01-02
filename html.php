<?php

// ugly bunch of html helpers

function html_head($title) {
  echo "
<!DOCTYPE html>
<html>
<head>
  <title>$title</title>
  <meta charset='utf-8'/>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
";
}

function html_foot() {
  echo "
</html>
";
}
