<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "goods", "鉄の剣", 2000, "鉄製の剣。そこそこつよい"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "goods", "鉄の盾", 200, "鉄製の盾。そこそこ丈夫"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "goods", "魔法の杖", 1800, "魔法が出せる杖。初心者向け"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "goods", "木の枝", 20, "長くて丈夫な枝。人に向けて振るってはいけない"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "goods", "謎のお面", 5000, "奇抜なデザインのお面。付けると凶暴になる"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "other", "スリングショット", 400, "弾が50発付属。人に向けて撃ってはいけない"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "other", "ハンドスピナー", 5000, "今流行りのおもちゃ。最大10分間回り続ける"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "DX", "DX巨大ロボット", 5600, "全長400mmのカッコイイロボ"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "DX", "DXハイテクビームガン", 2300, "光る！鳴る！ハイテク銃"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "DX", "DXスーパーカー", 4500, "イカしたデザインのスーパーカー。ライトも点くぞ"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "fig", "格闘家対決セット", 3800, "あのゲームに登場した二人がフィギュアになって登場。体力バーも付属します"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "toy", "サメのぬいぐるみ", 1900, "凶暴なサメのぬいぐるみ。殴ると音が出る"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "game", "VR-マスク", 50000, "VR(ヴァーチャル・リアリティ)が体験できるすごいマスク。本体のゲーム機は付属しません"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "craft", "ペーパークラフトセット", 1500, "ペーパーでクラフトできるセット。恐竜・子ども・お花が作れます"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "fig", "魔法少女フィギュア", 5300, "あのアニメのキャラがフィギュアになって登場。"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "toy", "クマのぬいぐるみ", 2300, "キュートなクマのぬいぐるみ。中に収納スペースもあります"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "toy", "ハナアルキのぬいぐるみ", 2050, "ファンシーなハナアルキのぬいぐるみ。架空の生きものです"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "fig", "○○レンジャーセット", 4500, "○○レンジャーがフィギュアになって登場。○○シルバーは付属しません"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "game", "ゲーム機", 39800, "いろいろ遊べるゲーム機"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "craft", "紙粘土", 600, "紙の粘土"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "baby", "ブロック", 900, "赤・黄・緑・白のブロックで遊ぼう"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "other", "ヨーヨー", 1200, "アメリカ発のハイテクヨーヨー。人に向けて飛ばしてはいけない"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "baby", "汽車", 1500, "汽車のおもちゃ。ボタンを押すと蒸気が出ます"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "baby", "木馬", 800, "木の馬"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "game", "携帯ゲーム機", 25000, "携帯できるゲーム機。いろいろ遊べる"
        ]);

        DB::insert("insert into items (cat,name,price,profile) value (?,?,?,?)",[
            "baby", "知恵の輪", 1000, "パズルの一種。結構むずかしい"
        ]);
    }
}
