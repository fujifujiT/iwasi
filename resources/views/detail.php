<!doctype html>
<html class ="back">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/EC.css" type=text/css>
    </head>
    <body style="background-image: url(/back.png)">
    <title><?= $item->name ?></title>
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

    <div class = "itemEC_detail" style="padding-top: 100px">
        <img src="../<?= $item->id ?>.png" alt="" class="img-thumbnail" >

        <table class="table table-bordered" style="background: white; border: solid 4px gray">
            <thead><tr><th>名称</th><th>値段</th><th>説明</th></tr></thead>
            <tr><td><?= $item->name ?></td><td><?= $item->price ?>円</td><td><?= $item->profile ?></td></tr>
        </table>

            <form action="/cart/<?= $item->id ?>" method="POST">
                <?= csrf_field() ?>
                <input type="submit" value="カートに追加" class="btn btn-default EC">
            </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
