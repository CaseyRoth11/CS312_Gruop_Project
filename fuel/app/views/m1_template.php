<head>
    <title><?php $title; ?></title>
    <meta charset="utf-8"></meta>
    <meta  name="author" content="Group 30"></meta>
    <meta name="description" content="Milestone 1"></meta>
	<?php echo Asset::css('m1.css')?>
</head>
<body>
    <header>
            <ul id="navigation">
            <?php echo '<a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/assets/img/logo.png">'.Asset::img('logo.png',array('id'=>'logo')).'</a>'?>
                <?php echo '<a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/index/m1/index"><li>Homepage</li></a>' ?>  
                <?php echo '<a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/index/m1/about"><li>About Us</li></a>' ?>  
                <!--- Need to add the link and info for vars for color generator --->
                <?php echo '<a href="https://cs.colostate.edu:4444/'.$eid.'/cs312/fuelviews/index/m1/colorcoordinate"><li>Color <br>Coordinates</li></a>' ?> 
            </ul>
    </header>
    <main>
        <?php echo $content ?>
    </main>
    <footer>
    </footer>
</body>

