<?php
/**
 * Front page template.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>
<section class="hero">
	<div class="container hero-grid">
		<div class="hero-copy">
			<p class="eyebrow"><?php esc_html_e('電子部品調達サポート', 'sc-life-theme'); ?></p>
			<h1 class="hero-title"><?php esc_html_e('調達が難しい電子部品も、SC LIFEが国内外ネットワークで探索します。', 'sc-life-theme'); ?></h1>
			<p>
				<?php esc_html_e('試作・保守・EOL対応まで、BtoB調達に必要な安心感と分かりやすさを備えたコーポレートサイト用テーマです。サービス紹介、信頼訴求、お問い合わせ導線をシンプルにまとめています。', 'sc-life-theme'); ?>
			</p>
			<div class="hero-actions">
				<a class="button button-primary" href="#services"><?php esc_html_e('サービスを見る', 'sc-life-theme'); ?></a>
				<a class="button button-secondary" href="#contact"><?php esc_html_e('お問い合わせ', 'sc-life-theme'); ?></a>
			</div>
		</div>
		<div class="hero-panel">
			<div class="panel">
				<span class="panel-label"><?php esc_html_e('対応範囲', 'sc-life-theme'); ?></span>
				<div class="metric-value"><?php esc_html_e('見積・調達・在庫相談', 'sc-life-theme'); ?></div>
				<p><?php esc_html_e('トップページ、メニュー、投稿一覧、更新導線まで含めた最小構成を用意しています。実案件に合わせてこのまま育てられます。', 'sc-life-theme'); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="trust" class="section">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e('選ばれる理由', 'sc-life-theme'); ?></p>
		<h2 class="section-title"><?php esc_html_e('調達担当者が知りたい安心材料を、先に伝える構成です。', 'sc-life-theme'); ?></h2>
		<p class="section-copy"><?php esc_html_e('企業サイトとしての信頼感を重視し、落ち着いた配色、読みやすい階層、明確な導線で、問い合わせ前の不安を減らす設計にしています。', 'sc-life-theme'); ?></p>
		<div class="trust-grid">
			<article class="trust-card">
				<h3 class="card-title"><?php esc_html_e('グローバル調達ネットワーク', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('国内外のサプライチェーンを前提に、入手困難品や代替候補の相談に対応しやすい見せ方です。', 'sc-life-theme'); ?></p>
			</article>
			<article class="trust-card">
				<h3 class="card-title"><?php esc_html_e('品質と実績の訴求', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('品質保証、業界経験、納入実績など、BtoBサイトで重要な根拠を並べやすいカード構成です。', 'sc-life-theme'); ?></p>
			</article>
			<article class="trust-card">
				<h3 class="card-title"><?php esc_html_e('スマホでも読みやすい', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('PCでもスマートフォンでも横崩れしにくく、問い合わせボタンまで迷わず進めるレスポンシブ構成です。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="services" class="section">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e('サービス内容', 'sc-life-theme'); ?></p>
		<h2 class="section-title"><?php esc_html_e('SC LIFE の事業説明にそのまま使える基本セクションを揃えています。', 'sc-life-theme'); ?></h2>
		<div class="service-grid">
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('電子部品調達', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('通常品から入手困難品まで、見積依頼につなげるサービス紹介を掲載できます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('EOL・廃番部品対応', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('保守案件や継続供給の課題に向けて、代替提案や探索対応を案内できます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('余剰在庫の買取相談', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('過剰在庫の整理や現金化ニーズに向けた導線をトップページにまとめられます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('特殊機材の調達', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('産業機器、計測機器、MIL規格関連など、一般流通しにくい案件にも対応しやすい構成です。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="metrics" class="section">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e('導入しやすさ', 'sc-life-theme'); ?></p>
		<h2 class="section-title"><?php esc_html_e('初期公開から運用更新まで、無理なく始められる構成です。', 'sc-life-theme'); ?></h2>
		<div class="metric-grid">
			<article class="metric-card">
				<div class="metric-value">100%</div>
				<p><?php esc_html_e('テーマ内のコードを直接管理できるので、外部ビルダー依存なしで改善できます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">2</div>
				<p><?php esc_html_e('ヘッダーとフッターのメニューを登録済みで、基本ナビゲーションをすぐ使えます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">4</div>
				<p><?php esc_html_e('主要サービスカードを初期実装済みで、内容差し替えだけでも公開しやすい状態です。', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">0</div>
				<p><?php esc_html_e('Node.js などの追加ビルド依存なしで、PHP と CSS だけで運用できます。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="contact" class="section">
	<div class="container">
		<div class="content-card">
			<p class="eyebrow"><?php esc_html_e('次のアクション', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('このテーマを土台に、実際の会社情報と問い合わせ導線へ仕上げていきます。', 'sc-life-theme'); ?></h2>
			<p class="section-copy"><?php esc_html_e('次の実装候補は、固定ページテンプレート、ニュース一覧、部品検索導線、お問い合わせフォーム連携です。まずは会社情報とサービス内容を差し替えるだけでも公開準備を進められます。', 'sc-life-theme'); ?></p>
		</div>
	</div>
</section>
<?php
get_footer();
