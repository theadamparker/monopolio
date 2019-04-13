<div class="section--grid section--grid8">
<?php
    $token = '10906713.792459e.adf1d0b64ddb4ec798633be424813d0b';
    // $userID = '4004497308';
    $endpoint = 'users/self/media/recent';
    $params = [
        'count' => 8
    ];
    $force = false;
    foreach(site()->instagram($token, $endpoint, $params, $force) as $data) {
    ?>
    <?php
    ?>
    <figure class="col-2-8 row-2">
    <?php
        echo Kirby\Toolkit\Html::img(
            $data['images']['standard_resolution']['url']
        );
    ?>
    </figure>
    <?php
    }
?>
</div>

<!-- https://www.instagram.com/oauth/authorize/?client_id=792459e5435740d69b806d7e9e18877c&redirect_uri=https://mono.theadamparker.com&response_type=token -->
