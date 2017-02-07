<?php
    /**
     * Created by PhpStorm.
     * User: Kimildo
     * Date: 2017-02-07
     * Time: 오후 5:32
     */

?>


<html>
<head>
    <title>hello</title>
</head>
<body>
<?php echo $hello?><br />
111 Page rendered in <strong>{elapsed_time}</strong> seconds.<br />
<?php if (!empty($result)) { ?>
<?php foreach($result as $row):?>
    <h3><?=$row->title?></h3>
    <p><?=$row->text?></p>
    <br />
<?php endforeach; } ?>

<?php echo $debugbarRenderer->render() ?>
</body>
</html>


