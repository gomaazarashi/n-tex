# 事業案内ページ アンカーずれ 引き継ぎメモ

対象: https://ntex-co.devfunnel2.work/business/ （テーマ: wp-content/themes/ntex-theme/）

## 症状
事業案内ページ上部のイントロカード「リペア工房」を押すと、スクロールはするが
リペア工房セクション（#repair）ではなく、その手前のコールセンター
（カスタマーサポート代行 #callcenter）あたりで止まる。PC・スマホ・別端末いずれも同様。
URLにハッシュは付かない（=JSのスムーススクロールがpreventDefaultしている）。

## アンカー構成（page-business.php、修正済み）
- カスタマーサポート代行カード: `<a href="#callcenter">` → セクション `id="callcenter"`（旧 ilrental）
- リペア工房カード: `<a href="#repair">` → セクション `id="repair"`（旧 tavishot）
- 他の正常なアンカー: #ecorica / #plaisir / #rinoka

## これまで試したこと（効果なし or 不十分）
1. ブランドカード画像の `loading="lazy"` を全削除
2. ブランドカード画像に `width="640" height="360"` を付与（読込前に領域確保）
3. custom.css の `.p-business-brand-card__img { aspect-ratio:16/9 }` で領域確保

## 最有力の原因（Codeで要確認）
**js/main.js のスムーススクロール処理が、ページ読込時にアンカー位置を
キャッシュしている**可能性。callcenterセクションに後から追加した
ブランドカード3枚（画像入り）でセクションが大幅に縦長になったため、
キャッシュ済み座標と実際の座標がずれ、#repair が手前で止まると推測。

### 確認ポイント
- `js/main.js` 内でアンカー/スムーススクロールを処理している箇所
  （`offset()`, `scrollTop`, `animate`, `href^="#"` 等で検索）
- 座標を「クリック時」ではなく「読込時に一度だけ」取得していないか
- 固定ヘッダー分のオフセット計算の有無
- 対策候補: クリック時に毎回 `offset().top` を取り直す / または
  CSSの `scroll-behavior: smooth` + `scroll-margin-top` でJSに依存しない実装へ

## 補足
- カスタマーサポート/リペアの上部ブランドロゴ円は、スマホで横3つ並びに
  するCSSを custom.css 末尾に追加済み（`@media (max-width:767px)`）。
- custom.css はサーバー上では `themes/ntex-theme/css/custom.css`。
- デプロイは手動アップロード。
