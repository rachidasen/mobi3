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
        <!-- <header id="top">
            <!-<a href="/"><img alt="/C$50 Finance" src="/img/logo.gif"/></a> -->
          <!--  <nav class="navbar navbar-default" role="navigation">

        </header> -->

    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand"><img src="../public/img/logo.gif"></a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
          <ul class="nav navbar-nav">
            <li>
              <a href="../getting-started/">Getting started</a>
            </li>
            <li>
              <a href="../css/">CSS</a>
            </li>
            <li class="active">
              <a href="../components/">Components</a>
            </li>
            <li>
              <a href="../javascript/">JavaScript</a>
            </li>
            <li>
              <a href="../customize/">Customize</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>
            <li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
          </ul>
        </nav>
      </div>
    </header>
        <div class="container">

            <div id="top">
                
            </div>

            <div id="middle">
