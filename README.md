# CakePHP3Basic

各章で習得した内容

## 1章

- CakePHPのインストール手順
- フォルダ構成
- App.phpに載っている情報
- データベースの設定(記載ではSQLiteにしているが、私の環境はMySQLにしている)

## 2章

- Controllerの基礎
- URLから引数の受け渡し

## 3章

- ControllerからViewへのデータの受け渡し
- FormからControllerへのデータの受け渡し
- FormHelperを使わないと基本CSRFのエラーが出ること。エラー回避策としてindex.ctpに

    &lt;input type=&quot;hidden&quot; name=&quot;_csrfToken&quot; value=&quot;&lt;?= $this-&gt;request-&gt;getParam('_csrfToken') ?&gt;&quot;&gt;

    を入れた。

## 4章

- Formタグを直接書くのではなく、FormHelperを使う
- FormHelperの簡単な使い方

## 5章

- Modelの基礎
- Modelが自動生成できることと、Modelの自動生成コマンド

## 6章

- 入力フォームからデータベースへのデータの受け渡し
- CRUDの基本

## 7章

- データベース検索の条件設定

## 8章

- データベース検索の条件設定
- SQL文をダイレクトに書く方法

※ 8章6で、fetchAll()が記載されている箇所があるが、連想配列を指定する引数がないのでエラーになった。

（誤)

    $persons = $connection->query($query)->fetchAll();


（正)

    $persons = $connection->query($query)->fetchAll('assoc');

## 9章

- ページ操作の基本、テンプレートの作り方

## 10章


## 11章



## 12章



## 13章



## 14章



## 15章
