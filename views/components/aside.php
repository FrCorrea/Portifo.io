<div class="aside-container">
    <div class="img-container">
        <img src="../assets/birb.png" alt="" class="profile-img">
    </div>
    <div class="profile-header">
        <h3 class="profile-name"><b>
                <?php echo $_SESSION['user_name'] ?? '' ?>
            </b></h1>
            <h5 class="role">Software Engineer</h5>
    </div>
    <div class="profile-information">
        <div class="technologies-container">
            <h5 class="technologies">Technologies</h4>
                <span class="badge bg-secondary">Typescript</span>
            </h5>
            <span class="badge bg-secondary">Node</span></h5>
            <span class="badge bg-secondary">React</span></h5>
            <span class="badge bg-secondary">Angular</span></h5>
            <span class="badge bg-secondary">Java</span></h5>
        </div>

        <div class="general-info-container">
            <h5 class="aside__email">General info</h5>
            <p><b>Email: </b><?php echo $_SESSION['user_email'] ?? '' ?></p>
            <p><b>Github: </b>https://github.com/FrCorrea</p>
            <p><b>LinkedIn: </b>https://www.linkedin.com/in/frcorrea/</p>
        </div>

        <div class="education-container">
            <h5 class="aside__education">Education</h5>
            <div class="card border-light education-card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    
</div>