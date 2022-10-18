# amira

## ダウンロード方法

git clone

git clone https://github.com/unkler/amira


git clone ブランチを指定してダウンロードする場合

git clone -b ブランチ名 https://github.com/unkler/amira

もしはzipファイルでダウンロードして下さい

## インストール方法
- cd amira
- composer install
- npm install
- npm run dev

.env.exampleをコピーして.envファイルを生成

.envファイルの中の下記をご利用の環境に合わせて変更して下さい

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=amira
DB_USERNAME=root
DB_PASSWORD=

## DBマイグレーション

php artisan migrate::fresh --seed

## キー生成

php artisan key:generate

## 画像のリンク

php artisan storage:link

※Tailwindcss 3.xの、JustInTime機能により、 使ったHTML内クラスのみ反映されるようになっていますので、 HTMLを編集する際は、 npm run watch も実行しながら編集するようにしてください。




