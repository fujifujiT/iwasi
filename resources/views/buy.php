<!doctype html>
<html class ="back">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/EC.css" type=text/css>
    </head>
    <body style="background-image: url(back.png)">
    <title>購入画面</title>
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
    <div class="boxB" >
        <div class="container">
            <div class="form-horizontal">
                <form action="buy" method="POST">
                <div class="form-group">
                    <label class="col-xs-2 label-control">お名前:</label>
                    <div class="col-xs-3">
                        <input type="text" name="name" value="<?=old('name') ?>">
                        <?=csrf_field()?>
                    </div>
                    <div class="col-xs-3">
                    <?php if($errors->first('name')):?>
                        <p class="warning">名前を入力してください。</p>
                    <?php endif;?><br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 label-control">メールアドレス:</label>
                    <div class="col-xs-3">
                        <input type="text" name="email" value="<?=old('email') ?>">
                    </div>
                    <div class="col-xs-3">
                    <?php if($errors->first('email')):?>
                        <p class="warning">Emailを入力してください。</p>
                    <?php endif;?><br>
                    </div>
                </div>
                    <input type="submit" value="購入を確定する" class="btn btn-default EC" style="width: 124px">
                    <a href="/cart" class="btn btn-primary" style="width: 124px">カートに戻る</a>
                </form>
            </div>
        </div>


        <div class="buy">
            <p style="border-bottom: 1px solid black">注文内容 </p>
            <?php $sum = 0 ?>
            <?php foreach($items as $index => $item):?>
                <div class="buy_item">
                    <table>
                        <tr><td rowspan="2">
                            <img src="<?= $item->id ?>.png" alt="" class="img-thumbnail">
                        </td>
                        <td>　<?= $item->name ?><br></td>
                        </tr>
                        <td><span style="color:crimson">　<?= $item->price ?>円</span></td>
                        </tr>
                    </table>
                </div>
            <?php endforeach;?>
            <?php foreach ($items as $item ): ?>
                <?php $sum = $sum + $item->price ?>
            <?php endforeach?>
            <p>　　　　　　　　　　　　カート内の合計： <span class="cartsum"><?php echo "$sum" ?></span>円</p>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>