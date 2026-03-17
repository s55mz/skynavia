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
	<div class="hero-media" aria-hidden="true">
		<div class="hero-mast"></div>
		<div class="hero-boom"></div>
		<div class="hero-cable hero-cable-a"></div>
		<div class="hero-cable hero-cable-b"></div>
		<div class="hero-figure hero-figure-a"></div>
		<div class="hero-figure hero-figure-b"></div>
		<div class="hero-groundline"></div>
	</div>
	<div class="hero-overlay"></div>
	<div class="hero-frame">
		<p class="hero-index"><?php esc_html_e('SkyNavia / Semiconductor Procurement', 'sc-life-theme'); ?></p>
		<div class="hero-grid">
			<div class="hero-copy">
				<h1 class="hero-title">
					<span><?php esc_html_e('Opening', 'sc-life-theme'); ?></span>
					<span><?php esc_html_e('the next', 'sc-life-theme'); ?></span>
					<span><?php esc_html_e('supply route.', 'sc-life-theme'); ?></span>
				</h1>
				<p class="hero-lead">
					<?php esc_html_e('供給が見えにくい半導体調達に、探索、代替案、品質条件をまとめた進めやすい提案をつくります。', 'sc-life-theme'); ?>
				</p>
				<div class="hero-actions">
					<a class="button button-primary" href="#contact"><?php esc_html_e('Request Quote', 'sc-life-theme'); ?></a>
					<a class="button button-secondary" href="#solutions"><?php esc_html_e('Capabilities', 'sc-life-theme'); ?></a>
				</div>
			</div>
			<div class="hero-news">
				<p class="hero-news-label"><?php esc_html_e('News', 'sc-life-theme'); ?></p>
				<p class="hero-news-date">2026.03.17</p>
				<p class="hero-news-copy"><?php esc_html_e('難調達、EOL、代替提案までを一つの窓口で扱う SkyNavia のテーマを更新しました。', 'sc-life-theme'); ?></p>
				<a class="hero-news-link" href="#about"><?php esc_html_e('Read more', 'sc-life-theme'); ?></a>
			</div>
		</div>
	</div>
</section>

<section id="about" class="section section-intent">
	<div class="section-shell intent-grid">
		<div class="intent-heading">
			<p class="eyebrow"><?php esc_html_e('Overview', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('情報を増やすのではなく、判断を早くする。', 'sc-life-theme'); ?></h2>
		</div>
		<div class="intent-copy">
			<p class="section-copy">
				<?php esc_html_e('SkyNavia は、ばらばらに届きやすい調達条件を一度整え、探索、代替案、品質確認をひとつの会話にまとめます。静かな見た目は、そのまま運用の落ち着きを表します。', 'sc-life-theme'); ?>
			</p>
			<div class="intent-points">
				<article class="intent-point">
					<p class="point-no">01</p>
					<h3><?php esc_html_e('依頼の入口を簡潔にする', 'sc-life-theme'); ?></h3>
					<p><?php esc_html_e('型番と条件だけで会話を始められる設計です。', 'sc-life-theme'); ?></p>
				</article>
				<article class="intent-point">
					<p class="point-no">02</p>
					<h3><?php esc_html_e('代替案まで同じ提案線上で見せる', 'sc-life-theme'); ?></h3>
					<p><?php esc_html_e('不足時も止めずに、次の候補へつなげます。', 'sc-life-theme'); ?></p>
				</article>
				<article class="intent-point">
					<p class="point-no">03</p>
					<h3><?php esc_html_e('品質条件を後回しにしない', 'sc-life-theme'); ?></h3>
					<p><?php esc_html_e('真贋やトレーサビリティも最初から整理します。', 'sc-life-theme'); ?></p>
				</article>
			</div>
		</div>
	</div>
</section>

<section id="solutions" class="section section-capabilities">
	<div class="section-shell">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e('Capabilities', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('必要な機能だけを、3本の航路に。', 'sc-life-theme'); ?></h2>
		</div>
		<div class="capability-list">
			<article class="capability-row">
				<div class="capability-index">01</div>
				<div class="capability-copy">
					<h3 class="card-title"><?php esc_html_e('半導体調達', 'sc-life-theme'); ?></h3>
					<p><?php esc_html_e('MCU、FPGA、アナログ、メモリなど、量産案件から難調達まで、必要条件を揃えたうえで提案します。', 'sc-life-theme'); ?></p>
				</div>
				<ul class="capability-tags" aria-label="<?php esc_attr_e('調達対象', 'sc-life-theme'); ?>">
					<li>MCU</li>
					<li>FPGA</li>
					<li>Analog</li>
					<li>Memory</li>
				</ul>
			</article>
			<article class="capability-row">
				<div class="capability-index">02</div>
				<div class="capability-copy">
					<h3 class="card-title"><?php esc_html_e('代替 / EOL 提案', 'sc-life-theme'); ?></h3>
					<p><?php esc_html_e('供給継続が難しい部品は、代替候補、条件差、切替時の判断材料まで含めて整理します。', 'sc-life-theme'); ?></p>
				</div>
				<ul class="capability-tags" aria-label="<?php esc_attr_e('代替提案の内容', 'sc-life-theme'); ?>">
					<li>EOL</li>
					<li>Cross Reference</li>
					<li>Spec Gap</li>
					<li>Lead Time</li>
				</ul>
			</article>
			<article class="capability-row">
				<div class="capability-index">03</div>
				<div class="capability-copy">
					<h3 class="card-title"><?php esc_html_e('品質 / 真贋確認', 'sc-life-theme'); ?></h3>
					<p><?php esc_html_e('提案前提として、トレーサビリティ、品質条件、確認範囲を明確にし、判断リスクを下げます。', 'sc-life-theme'); ?></p>
				</div>
				<ul class="capability-tags" aria-label="<?php esc_attr_e('品質確認の内容', 'sc-life-theme'); ?>">
					<li>Traceability</li>
					<li>Authenticity</li>
					<li>Inspection</li>
					<li>Documentation</li>
				</ul>
			</article>
		</div>
	</div>
</section>

<section id="process" class="section section-process">
	<div class="section-shell process-grid">
		<div class="process-heading">
			<p class="eyebrow eyebrow-light"><?php esc_html_e('Process', 'sc-life-theme'); ?></p>
			<h2 class="section-title section-title-light"><?php esc_html_e('依頼は、4つの確認で提案に変わる。', 'sc-life-theme'); ?></h2>
			<p class="section-copy section-copy-light">
				<?php esc_html_e('複雑な案件でも、進み方は明快であるべきです。SkyNavia は問い合わせから提案までを、短く管理しやすい単位へ分解します。', 'sc-life-theme'); ?>
			</p>
		</div>
		<div class="process-steps">
			<article class="process-step">
				<p class="process-index">01</p>
				<h3><?php esc_html_e('Receive', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('型番、数量、納期、用途、品質条件を確認。', 'sc-life-theme'); ?></p>
			</article>
			<article class="process-step">
				<p class="process-index">02</p>
				<h3><?php esc_html_e('Search', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('供給網、在庫、難調達リスクを探索。', 'sc-life-theme'); ?></p>
			</article>
			<article class="process-step">
				<p class="process-index">03</p>
				<h3><?php esc_html_e('Review', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('代替候補、条件差、品質前提を整理。', 'sc-life-theme'); ?></p>
			</article>
			<article class="process-step">
				<p class="process-index">04</p>
				<h3><?php esc_html_e('Propose', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('見積、代替案、次の判断材料を提示。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="trust" class="section section-proof">
	<div class="section-shell proof-grid">
		<div class="proof-heading">
			<p class="eyebrow"><?php esc_html_e('Proof', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('約束するのは、派手さではなく判断可能性です。', 'sc-life-theme'); ?></h2>
		</div>
		<div class="proof-list">
			<article class="proof-item">
				<p class="point-no">A</p>
				<h3><?php esc_html_e('条件を先に整理する', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('依頼の抜け漏れを減らし、初動を早くします。', 'sc-life-theme'); ?></p>
			</article>
			<article class="proof-item">
				<p class="point-no">B</p>
				<h3><?php esc_html_e('代替候補まで含めて考える', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('見積だけで終わらない提案線をつくります。', 'sc-life-theme'); ?></p>
			</article>
			<article class="proof-item">
				<p class="point-no">C</p>
				<h3><?php esc_html_e('品質条件も同時に扱う', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('価格だけでなく、判断の安心まで設計します。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="contact" class="section section-contact">
	<div class="section-shell">
		<div class="contact-frame">
			<div class="contact-copy">
				<p class="eyebrow"><?php esc_html_e('Contact', 'sc-life-theme'); ?></p>
				<h2 class="section-title"><?php esc_html_e('まずは、型番と数量だけ共有してください。', 'sc-life-theme'); ?></h2>
				<p class="section-copy">
					<?php esc_html_e('案件が固まり切っていなくても問題ありません。見積依頼、EOL、代替相談まで、最初の整理から対応します。', 'sc-life-theme'); ?>
				</p>
			</div>
			<div class="contact-actions">
				<a class="button button-primary" href="mailto:contact@example.com"><?php esc_html_e('Email SkyNavia', 'sc-life-theme'); ?></a>
				<a class="button button-secondary" href="tel:+81312345678"><?php esc_html_e('Call 03-1234-5678', 'sc-life-theme'); ?></a>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
