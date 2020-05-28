# U-lab Laravel Hands On

2020年U-labバックエンド勉強会  
PHPフレームワークLaravelの使い方を実際にデモアプリを作りながら学ぶ。  

※ Safety Park とは、新型コロナで公園が密になっている状況を受けて、子供を持つお母さんが近くの公園の混雑状況が分かるWebアプリ

## 環境

- PHP 7.4
- Laravel 7

## 資料

- [インストール手順](.docs/Installation.md) 

## API 仕様書

API仕様書は SwaggerEditor に定義ファイルの内容を入力して参照してください。

Swagger Editor: [https://editor.swagger.io](https://editor.swagger.io)  
API 仕様書: [api-document.yaml](api/api-document.yaml) 

## Database 仕様書

[MySQL Workbench](https://www.mysql.com/jp/products/workbench/) を使用しています。

Database ER図(png): [database-er.png](.docs/database-er.png)  
Database ER図(mwb): [database-er.mwb](.docs/database-er.mwb)

## Laravel 起動

1. XAMPPなどでDBを立ち上げる
2. 以下のコマンドを入力

```shell script
$ php artisan serve # サーバー起動 
```

## Laravel 更新作業

### DBの更新

```shell script
$ php artisan migrate --seed # DBマイグレーション
```

### DBのリセット

```shell script
$ php artisan migrate:refresh --seed # DBマイグレーション
```
