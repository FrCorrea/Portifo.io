<?php
    $data = json_decode($user, true);
?>
<div class="aside-container">
    <div class="img-container">
        <img src="views/assets/birb.png" alt="" class="profile-img">
    </div>
    <div class="profile-header">
        <h3 class="profile-name"><b>
                <?php 
                echo $data[0]["name"]?? '' 
                ?>
            </b></h1>
            <h5 class="role">Software Engineer</h5>
    </div>
    <div class="profile-information">
        <div class="technologies-container">
            <h5 class="technologies">Technologies</h5>
            <span class="badge bg-secondary">Typescript</span>
            <span class="badge bg-secondary">Node</span>
            <span class="badge bg-secondary">React</span>
            <span class="badge bg-secondary">Angular</span>
            <span class="badge bg-secondary">Java</span>
        </div>

        <div class="general-info-container">
            <h5 class="aside__email">General info</h5>
            <p><b>Email: </b><?php echo $data[0]["email"] ?? '' ?></p>
            <p><b>Github: </b><?php echo $data[0]["github"] ?? '' ?></p>
            <p><b>LinkedIn: </b><?php echo $data[0]["linkedln"] ?? '' ?></p>
        </div>
    </div>

</div>