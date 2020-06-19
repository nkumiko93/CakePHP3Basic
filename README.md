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

- バリデーションの基礎。入力チェックを試す。

## 11章

- 複数テーブル(Members, Messages)の連携方法
- Modelフォルダ以下のファイルを手作業で作成


## 12章

- Membersテーブル関連のファイル作成

## 13章

- Messagesテーブル関連のファイル作成

## 14章

- コマンドで簡単にコード生成する方法

## 15章

-- レイアウトの変更方法
