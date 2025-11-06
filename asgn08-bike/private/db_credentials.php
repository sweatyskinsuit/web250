<?php

// Keep database credentials in a separate file
// 1. Easy to exclude this file from source code managers
// 2. Unique credentials on development and production servers
// 3. Unique credentials if working with multiple developers

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "chain_gang");

//define("DB_SERVER", "localhost");
//define("DB_USER", "hannrgla_chain_gang_user");
//define("DB_PASS", "PlaBabCof10?");
//define("DB_NAME", "hannrgla_chain_gang");
