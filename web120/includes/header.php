<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/table.css"/>
<script src="https://use.fontawesome.com/b2b6bdd67a.js"></script>
</head>

<body>
<!-- START WRAPPER -->
    <div class="wrapper">
        <header>
            <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Nicolet's SCC WEB120 Portal</a></h1>
                <nav>
                    <ul class="topnav" id="myTopnav">
                        <?=makeLinks($nav1)?>
                        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                    </ul>
                </nav>
        </header>
        
<!-- START LEFT COL -->

 <h2 class="pageID"><?=$PageID?></h2>
