<!DOCTYPE html>
<html>
<head>
    <title>Restaurants</title>
</head>
<body>
    <h1> Yelp </h1>
    <h2> Reviews for <?php echo $restaurant->restaurant_name; ?></h2>
    <?php if ($facebook_data): ?>
        <h3> Facebook Activity</h3>
        <h4> Likes: <?php echo $facebook_data->likes; ?></h4>
        <h4> Checkins: <?php echo $facebook_data->checkins; ?></h4>
    <?php endif; ?>
    <?php foreach ($reviews as $review): ?>
        <?php for ($i = 0; $i < $review->rating; $i++): ?>
            <?php echo HTML::image('img/star.png');?>
        <?php endfor;?>
        <h3> <?php echo $review->review_description;?></h3>
        <p style="border-bottom:1px solid black;"></p>
    <?php endforeach;?>
</body>
</html>
