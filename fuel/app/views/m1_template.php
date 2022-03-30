<head>
    <title><?php $title; ?></title>
    <meta charset="utf-8"></meta>
    <meta  name="author" content="Group 30"></meta>
    <meta name="description" content="Milestone 1"></meta>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
            <ul>
                <?php echo '<li><a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/index/m1/index">Homepage</a></li>' ?> | 
                <?php echo '<li><a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/index/m1/about">About Us</a></li>' ?> | 
                <!--- Need to add the link and info for vars for color generator --->
                <?php echo '<li><a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/index/m1/colorcoordinate">Color Coordinates</a></li>' ?> | 
            </ul>
    </header>
    <main>
        <?php echo $content ?>
    </main>
    <footer>
    </footer>
</body>

