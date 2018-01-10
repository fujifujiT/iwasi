<!doctype html>
<html class ="back">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/EC.css" type=text/css>
    </head>
    <body style="background-image: url(back.png)">
    <title>カート</title>
    <nav class="navbar navbar-default" style="margin:5px;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
                <span class="sr-only">メニュー</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">ECサイト</a>
        </div>

        <div id="gnavi" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/product">商品</a></li>
                <li><a href="/cart">カート</a></li>
            </ul>
        </div>
    </nav>

        <div class = "itemEC_detail">
            <div class="boxB text-left">
                <div class="container">
                    <?php foreach($items as $index => $item):?>
                    <div class="row" style="padding-top: 10px">
                        <div class="col-xs-7">
                        <img src="<?= $item->id ?>.png" alt="" class="img-thumbnail">
                        <?= $item->name ?>
                        <?= $item->price ?> 円
                        </div>
                        <div class="col-xs-3" style="">
                            <div class="delbtn">
                            <form action="/cart/delete/<?=$index?>" method="POST" style="display: inline" class="pull-right" >
                                <?= csrf_field() ?>
                                <input type="submit" value="カートから削除する" class="btn btn-primary">
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="sumEC text-right">
                        <form action="/buy" method="post" name="goukei">
                        <?php $sum =0?>
                        <?php foreach ($items as $item ): ?>
                            <?php $sum = $sum + $item->price ?>
                        <?php endforeach?>
                            <p>カート内の合計： <span class="cartsum"><?php echo "$sum"; ?></span>円</p>
                        </form>
                    </div>
                </div>
            </div>
            </form>

            <div style="display: inline-flex">
            <form action="/cart/{item_id}/delete" method="POST" style="margin-right: 5px">
                <?= csrf_field() ?>
                <input type="submit" value="カートを空にする" class="btn btn-default EC">
            </form>
            <form action="/buy" method="GET" style="margin-left: 5px">
                <?= csrf_field() ?>
                <input type="submit" value="購入画面に進む" class="btn btn-default EC">
            </form>
            </div><br>
        </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
