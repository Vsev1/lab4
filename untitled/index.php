<?php
$page = (isset($_GET['page']) ? $_GET['page'] : 'first');
require $page . '.php';




