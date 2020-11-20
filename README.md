# Mouton Noir
Snow Monkey customize, child theme.

## 概要
Snow Monkey 子テーマ用 ベーステンプレート

## Note
- snow-monkey
    - https://snow-monkey.2inc.org/
    - https://github.com/inc2734/snow-monkey/wiki
    - 非公式デモ&Tipsサイト
    https://happy-snow-monkey.olein-design.com/

- snow-monkey-diet
    - Snow Monkeyの不要な機能を停止するプラグイン
        - https://snow-monkey.2inc.org/2020/01/06/snow-monkey-diet/
    → 不要なものを無効化しておく

- ~~my-snow-monkey~~
    - ~~カスタマイズ用プラグインの雛形~~

- snow-monkey-blocks
    - ブロック集プラグイン
    - https://snow-monkey.2inc.org/snow-monkey-blocks/
    - https://wordpress.org/plugins/snow-monkey-blocks/

---

## WP初期設定
### 一般設定
| 設定 | 値 |
| --- | :---: |
| サイトの言語 | 日本語 |
| タイムゾーン | 東京 |
| 日付形式（カスタム） | Y.m.d |
| 時刻形式 | H:i |


### ディスカッション設定
- 「コメントの手動承認を必須にする」以外OFFに


### 追加プラグイン
-  Snow Monkey関連
    - snow-monkey-blocks
    - snow-monkey-diet
    - snow-monkey-editor
- 共通
    - acf-repeater
    - admin-menu-editor
    - advanced-custom-fields
    - advanced-custom-fields-table-field
    - auto-post-thumbnail
    - backwpup
    - ~~breadcrumb-navxt~~ いらないかも
    - classic-editor
    - contact-form-7
    - contact-form-cfdb7
    - custom-post-type-ui
    - duplicate-post
    - ~~google-analytics-dashboard-for-wp~~ いらないかも
    - ime-ready-taxonomy
    - intuitive-custom-post-order
    - password-protected
    - revision-control
    - user-role-editor
    - wordpress-seo
    - wp-multibyte-patch
    - ~~wp-pagenavi~~ いらないかも

- 開発用
    - duplicator


### パーマリンク設定
| 設定 | 値 |
| --- | :---: |
| 共通設定 | 投稿名 |

---

## カスタマイズ
### デザイン基本設定
テーマカスタマイザーからの色の変更を無効に

#### プラグイン側で無効にしている
- Pure CSSギャラリー
- シェアボタン
- インフィード広告
- アドセンス広告
- 関連記事

#### 管理画面側テンプレート設定（β版機能）
- jQueryの読み込みを最適化
- HTTP2 Server Pushを利用する
- 軽量なFontAwesomeを使用する
- ヘッダーをキャッシュ*
- フッターをキャッシュ*
- メニューをキャッシュ*

*リリース前にチェック

#### ヘッダー
ヘッダーレイアウト：1行

ヘッダー位置（PC/SP）：上部固定

### カスタマイズコード
view内と同じ階層でテンプレートファイルを用意することで、ファイルの上書きを行うことができます。

---

## Tips
### Snow Monkey Blocks のクラス名一覧表
#### 共通ブロック
| Block名 | クラス名 |
| --- | --- |
| Step | .wp-block-snow-monkey-blocks-btn.wp-block-snow-monkey-blocks-step |
| Ballon | .wp-block-snow-monkey-blocks-balloon |
| Button box | .wp-block-snow-monkey-blocks-btn-box |
| Icon list | .wp-block-snow-monkey-blocks-list |
| Alert | .wp-block-snow-monkey-blocks-alert |
| Button | .wp-block-snow-monkey-blocks-btn |
| Box | .wp-block-snow-monkey-blocks-box |
| Pricing table | .wp-block-snow-monkey-blocks-pricing-table |
| Rating box | .wp-block-snow-monkey-blocks-rating-box |
| FAQ | .wp-block-snow-monkey-blocks-faq |
| Testimonial | .wp-block-snow-monkey-blocks-testimonial |


#### セクション
| Block名 | クラス名 |
| --- | --- |
| Section | .wp-block-snow-monkey-blocks-section |
| Section (with image) | .wp-block-snow-monkey-blocks-section-with-image |
| Section (with background image) |.wp-block-snow-monkey-blocks-section-with-bgimage |
| Section (with items) | .wp-block-snow-monkey-blocks-section-with-items |
