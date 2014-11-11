<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>MOBI3: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>MOBI 3</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="tablist">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
            <li role="presentation" class="active"><a href="/">Home</a></li>
            <li role="presentation"><a href="products.php">PRODUCTS</a></li>
            <li role="presentation"><a href="track.php">TRACK-ORDER</a></li>
            <li role="presentation"><a href="../templates/contact.php">CONTACT-US</a></li>
            <li role="presentation"><?php
                    if(preg_match("{(?:login|register)\.php$}",$_SERVER["PHP_SELF"])){
                        if(isset($_SESSION["id"]))
                            echo "<a href=\"logout.php\">Logout</a>";
                        else
                            echo "<a href=\"login.php\">Login</a>";
                    } else
                        echo "<a href=\"logout.php\">Logout</a>";
            ?></li>
            </ul>
            </div>
        </nav>
        <div class="container">
            <header id="top">
                         <a href="/"><img alt="MOBI3" src="/img/logo.gif"/></a>
            </header>
            <div id="middle">

    
        