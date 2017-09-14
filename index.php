<?php
date_default_timezone_set('America/Los_Angeles');
$day = date('l');

$quotes = [
    'In theory there is no difference between theory and practice. --Yogi Berra',
    'Freedom is never more than one generation away from extinction. --Ronald Reagan',
    'Do unto others as you would have them do unto you. --Jesus Christ',
    'Ask not what your country can do for you, but what you can do for your country. --John F. Kennedy',
    'Whenever I\'m about to do something, I think, Would an idiot do that? And if they would, I do not do that thing. --Dwight Schrute'
];

$choice = array_rand($quotes, 1);

if (in_array($day, ['Friday', 'Saturday', 'Sunday'])) {
    $toDo = 'relax';
} else {
    $toDo = 'work';
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- DWA Fall 2017 Project 1, by Dave Crater -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Dave Crater</h1>
    <img src='images/crater_image.png' style="width:200px;height:228px;">
    <h2>About me</h2>
    <p>
        I am a satellite systems engineer in Los Angeles, and am taking this course because<br>
	much of what I do involves satellite ground systems that use open-source web technologies<br>
	such as PHP, Javascript, HTML, and CSS. I am also a graduate of Harvard Divinity School.<br>
	I look forward to a great semester!
    </p>
    <h2>Random Quote:</h2>
    <p>
        <?php echo $quotes[$choice]; ?>.
    </p>
</body>
</html>
