<?php

/* @var $this yii\web\View */

$this->title = 'IGreekU';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 data-sr="move 16px scale up 20%, over 1s">Welcome to IGreekU!</h1>

        <p class="lead" data-sr="move 16px scale up 20%, over 1s">IGreekU is aiming to become a social media company focused on members of fraternities and sororities.</p>

        <img data-sr="enter left, hustle 200px" src="/images/igreeku-1.jpg" class="img-rounded">
    </div>

     <div class="row">
        <div data-sr="enter left, hustle 200px" class="col-lg-4">
            <h2><span class="label label-primary">Providing</span></h2>

            <br>

            <p  >We are providing these organizations with a solution that addresses their communication and structural needs in a digital space.</p>
        </div>
        <div  data-sr="enter top, hustle 200px" class="col-lg-4">
            <h2><span class="label label-success">Connecting</span></h2>

            <br>

            <p >We will be connecting the local and national parts of the organizations together, including alumni. Each local chapter will be able to share content amongst themselves and connect within the national organization as well.</p>
        </div>
        <div  data-sr="enter right, hustle 200px" class="col-lg-4">
            <h2><span class="label label-info">Organization</span></h2>

            <br>

            <p>We will also be connecting current members with alumni of each organization, whether for advice, jobs, or just to chat and share stories.</p>
        </div>
    </div>
</div>

<script>
    window.sr = new scrollReveal();
</script>