<!DOCTYPE html>
<html>
<head>
    <title>Restaurants</title>
</head>
<body>
    <h1> Yelp </h1>
    <?php foreach ($restaurants as $restaurant): ?>
        <h2> <?php echo $restaurant->restaurant_name;?> (<?php echo $restaurant->city;?>)</h2>
        <h3> <?php echo $restaurant->type;?></h3>
        <?php if ($restaurant->facebook_page):?>
        <h3> Facebook Page: <a href="http://facebook.com/<?php echo $restaurant->facebook_page;?>">here</a></h3>
        <?php else: ?>
        <h3>Not on Facebook</h3>
        <?php endif;?>
        <h3><a href="/restaurants/<?php echo $restaurant->id;?>/reviews">View Reviews</a></h3>
        <p style="border-bottom:1px solid black;"></p>
    <?php endforeach;?>
</body>
</html>
