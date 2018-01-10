<!doctype html>
<html class ="back">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/EC.css" type=text/css>
    </head>
    <body style="background-image: url(back.png)">
    <title>商品一覧</title>
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

        <div class="boxA">
            <div style="text-align: center; padding: 20px">
                <a href="/product" class="btn btn-default">　 全部 　</a>
                <a href="/DX" class="btn btn-default DX">　男の子　</a>
                <a href="/game" class="btn btn-default game">　ゲーム　</a>
                <a href="/fig" class="btn btn-success">フィギュア</a>
                <a href="/toy" class="btn btn-danger">ぬいぐるみ</a>
                <a href="/craft" class="btn btn-warning">　 工作 　</a>
                <a href="/baby" class="btn btn-default baby">　 知育 　</a>
                <a href="/other" class="btn btn-default other">　 玩具 　</a>
                <a href="/goods" class="btn btn-default goods">　 仮装 　</a>
            </div>
            <div class="boxB">
                <form action="/search" method="post" style="text-align: center ">
                    <?=csrf_field()?>
                    <input type="text" name="serch">
                    <button type="submit" class="btn btn-default EC">検索</button>
                </form>
            <?php foreach($items as $item):?>
            <div class ="itemEC" >
                <a href="/detail/<?= $item->id ?>">
                <img src="<?= $item->id ?>.png" alt="" class="img-thumbnail"></a><br>
                <div class="itemEC_a">
                    <?= $item->name ?><br>
                    <?= $item->price ?> 円
                </div>
            </div>
           <?php endforeach; ?>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
