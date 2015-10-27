<div class="individual_post clearfix">
    <div class="col-md-2">
        <img src="<?=!empty($post['profile_image'])?$post['profile_image']:'/images/default-profile-image.png'?>" class="img-circle" width=48 height=48>
    </div>

    <div class="col-md-10">
        <div class="ip-1">
            <strong>
                <?=\Yii::$app->user->identity->firstname?> <?=\Yii::$app->user->identity->lastname?>
            </strong>

            <time class="pull-right">
                <small><?=$post['posttime']?></small>
            </time>
        </div>

        <div>
            <?=$post['message']?>
        </div>
    </div>
</div>