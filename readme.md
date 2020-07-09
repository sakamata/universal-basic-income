# Docker 環境作成の Test 用レポジトリ

## 構成

- php 7.4-fpm
- nginx 1.15.6
- mysql 8.0
- laravel 7.19.0(別レポジトリ)

laravel アプリは本リポジトリと同じディレクトリに配 app フォルダを設置、配下に laravel-app のフォルダ名で設置としている

```
├docker-compose-laravel
└app
  └laravel-app
```
