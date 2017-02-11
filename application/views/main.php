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
    <?php echo $debugbarRenderer->renderHead() ?>
</head>
<body>
<?php echo $hello?><br />
Page rendered in <strong>{elapsed_time}</strong> seconds.<br />
<?php if (!empty($jdata)) { ?>
<?php foreach($jdata as $row) { ?>
    <h3>seq : <?=$row->seq?></h3>
    <p>user_name : <?=$row->user_name?></p>
    <p>reg_date : <?=$row->reg_date?></p>
    <br />
<?php }} ?>

<?php echo $debugbarRenderer->render() ?>
</body>
</html>


