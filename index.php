<?php

require "models/Book.php";

require "models/User.php";

require "Flash.php";

session_start();

require "functions.php";

$config = require "config.php";

require 'Database.php';

require 'Validation.php';

require "routes.php";
