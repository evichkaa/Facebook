<div id="friends" style="display: inline;">
    <a href="profile.php?type=user&id= <?php echo $row['userid']?> " >
        <div style="padding:10px 0px;">
        <?php
            $image = "./images/user_male.jpg";
                if($friend_row['gender'] == "Female"){
                    $image = "./images/user_female.jpg";
                }
            ?>
            <img id="friends_img" src="<?php echo $image ?>" style="width:75px">
            <?php echo $friend_row['first_name'] . " " . $friend_row['last_name']?>
        </div>
    </a>
</div>