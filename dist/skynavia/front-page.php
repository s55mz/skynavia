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
	<div class="hero-shell">
		<div class="hero-copy">
			<p class="eyebrow"><?php esc_html_e('SC LIFE / Industrial Sourcing Interface', 'sc-life-theme'); ?></p>
			<h1 class="hero-title">
				<span><?php esc_html_e('探索の複雑さを、', 'sc-life-theme'); ?></span>
				<span class="hero-title-accent"><?php esc_html_e('静かに整理する。', 'sc-life-theme'); ?></span>
			</h1>
			<p class="hero-lead">
				<?php esc_html_e('SC LIFE は、入手困難な電子部品や特殊機材の調達を受ける企業向けに、判断のための情報を余白と階層で整えるコーポレートテーマです。派手な演出ではなく、精度と落ち着きで信頼を作ります。', 'sc-life-theme'); ?>
			</p>
			<ul class="hero-points">
				<li><?php esc_html_e('EOL・廃番部品の探索', 'sc-life-theme'); ?></li>
				<li><?php esc_html_e('試作から量産まで相談可能', 'sc-life-theme'); ?></li>
				<li><?php esc_html_e('品質保証と代替提案を両立', 'sc-life-theme'); ?></li>
			</ul>
			<div class="hero-facts">
				<div class="hero-fact">
					<span class="hero-fact-label"><?php esc_html_e('Coverage', 'sc-life-theme'); ?></span>
					<strong><?php esc_html_e('見積・調達・在庫相談', 'sc-life-theme'); ?></strong>
				</div>
				<div class="hero-fact">
					<span class="hero-fact-label"><?php esc_html_e('Response', 'sc-life-theme'); ?></span>
					<strong><?php esc_html_e('最短即日で方向性提示', 'sc-life-theme'); ?></strong>
				</div>
			</div>
			<div class="hero-actions">
				<a class="button button-primary" href="#contact"><?php esc_html_e('案件を相談する', 'sc-life-theme'); ?></a>
				<a class="button button-secondary" href="#solutions"><?php esc_html_e('対応領域を見る', 'sc-life-theme'); ?></a>
			</div>
		</div>
		<div class="hero-visual" aria-hidden="true">
			<div class="hero-stage">
				<div class="stage-panel stage-panel-dark"></div>
				<div class="stage-panel stage-panel-light"></div>
				<div class="stage-track"></div>
				<div class="stage-lane stage-lane-a"></div>
				<div class="stage-lane stage-lane-b"></div>
				<div class="stage-block stage-block-a"></div>
				<div class="stage-block stage-block-b"></div>
				<div class="stage-block stage-block-c"></div>
				<div class="stage-piece stage-piece-a"></div>
				<div class="stage-piece stage-piece-b"></div>
				<div class="stage-piece stage-piece-c"></div>
				<div class="stage-label stage-label-a"><?php esc_html_e('SC LIFE', 'sc-life-theme'); ?></div>
				<div class="stage-label stage-label-b"><?php esc_html_e('Industrial Network', 'sc-life-theme'); ?></div>
				<div class="stage-note">
					<p class="stage-note-title"><?php esc_html_e('PoC 相談対応', 'sc-life-theme'); ?></p>
					<p><?php esc_html_e('条件が未整理な段階でも、相談内容を静かに分解して進めます。', 'sc-life-theme'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="section section-story">
	<div class="section-shell story-shell">
		<div class="story-intro">
			<p class="eyebrow"><?php esc_html_e('What SC LIFE Solves', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('SC LIFE とは、調達担当者の負荷を減らし、判断を前に進めるための情報設計です。', 'sc-life-theme'); ?></h2>
		</div>
		<div class="story-body">
			<div class="story-copy">
				<p><?php esc_html_e('難調達品の問い合わせでは、対象部品の特性、代替候補、品質条件、希望納期など、初期段階で整理すべき情報が多くなります。', 'sc-life-theme'); ?></p>
				<p><?php esc_html_e('このテーマは、そうした複雑な相談を受ける企業向けに、要点を先に伝え、相談への心理的ハードルを下げる見せ方を意図しています。', 'sc-life-theme'); ?></p>
			</div>
			<div class="point-board">
				<article class="point-row">
					<p class="point-index">Point 01</p>
					<h3><?php esc_html_e('色分けされた情報階層で、内容を一目で整理。', 'sc-life-theme'); ?></h3>
				</article>
				<article class="point-row">
					<p class="point-index">Point 02</p>
					<h3><?php esc_html_e('プログラムや機能説明より、導入効果と相談価値を先に提示。', 'sc-life-theme'); ?></h3>
				</article>
				<article class="point-row">
					<p class="point-index">Point 03</p>
					<h3><?php esc_html_e('問い合わせの前に必要な安心材料をまとめて提示。', 'sc-life-theme'); ?></h3>
				</article>
			</div>
		</div>
	</div>
</section>

<section id="solutions" class="section">
	<div class="section-shell">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e('Solutions', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('課題起点で整理した、4つの相談導線。', 'sc-life-theme'); ?></h2>
			<p class="section-copy"><?php esc_html_e('全面を使ったレイアウトで、用途別の相談入口をはっきり分けます。', 'sc-life-theme'); ?></p>
		</div>
		<div class="service-grid">
			<article class="service-card">
				<p class="service-kicker"><?php esc_html_e('01 / Sourcing', 'sc-life-theme'); ?></p>
				<h3 class="card-title"><?php esc_html_e('電子部品調達', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('通常流通品から入手困難品まで、必要条件を整理しながら見積依頼へつなぎます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<p class="service-kicker"><?php esc_html_e('02 / Continuity', 'sc-life-theme'); ?></p>
				<h3 class="card-title"><?php esc_html_e('EOL・廃番部品対応', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('継続供給の不安に対して、代替候補や探索方針を初期段階からすり合わせます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<p class="service-kicker"><?php esc_html_e('03 / Inventory', 'sc-life-theme'); ?></p>
				<h3 class="card-title"><?php esc_html_e('余剰在庫の買取相談', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('過剰在庫の整理やキャッシュ化など、出口側の相談窓口としても機能させられます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<p class="service-kicker"><?php esc_html_e('04 / Special Case', 'sc-life-theme'); ?></p>
				<h3 class="card-title"><?php esc_html_e('特殊機材の調達', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('産業機器、計測機器、MIL規格関連など、一般流通しにくい案件も整理して訴求できます。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="process" class="section section-process">
	<div class="section-shell">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e('Process', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('相談から提案までの流れも、迷わせず見せる。', 'sc-life-theme'); ?></h2>
		</div>
		<div class="process-grid">
			<article class="process-card">
				<p class="process-index">Step 01</p>
				<h3 class="card-title"><?php esc_html_e('要件整理', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('部品番号、数量、希望納期、用途などを整理し、確認事項を明確にします。', 'sc-life-theme'); ?></p>
			</article>
			<article class="process-card">
				<p class="process-index">Step 02</p>
				<h3 class="card-title"><?php esc_html_e('探索と代替案提示', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('ネットワークを使った探索と、必要に応じた代替候補の方向性を提示します。', 'sc-life-theme'); ?></p>
			</article>
			<article class="process-card">
				<p class="process-index">Step 03</p>
				<h3 class="card-title"><?php esc_html_e('見積・継続支援', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('単発調達だけでなく、継続供給や在庫相談までつながる導線を確保します。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="trust" class="section">
	<div class="section-shell">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e('Trust Signals', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('安心材料は、数字と根拠で先に見せる。', 'sc-life-theme'); ?></h2>
		</div>
		<div class="metric-grid">
			<article class="metric-card">
				<div class="metric-value">100%</div>
				<p><?php esc_html_e('コードベース管理で、WordPressビルダー依存なし。改善速度を落としません。', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">2</div>
				<p><?php esc_html_e('ヘッダーとフッターのメニュー登録済み。基本導線をすぐ運用開始できます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">4</div>
				<p><?php esc_html_e('主要ソリューションを初期実装済み。会社情報を当て込めば公開準備を進められます。', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">0</div>
				<p><?php esc_html_e('Node.js などの追加ビルド依存なし。PHP と CSS だけで保守できます。', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="contact" class="section">
	<div class="section-shell">
		<div class="contact-panel">
			<div class="contact-copy">
				<p class="eyebrow"><?php esc_html_e('Contact', 'sc-life-theme'); ?></p>
				<h2 class="section-title"><?php esc_html_e('案件の状況が固まっていなくても、まずは相談できます。', 'sc-life-theme'); ?></h2>
				<p class="section-copy"><?php esc_html_e('実装段階ではここに問い合わせフォームや営業日情報、担当者コメントを追加できます。今は「連絡しやすそう」と感じる雰囲気を優先して、視認性の高いCTAブロックにしています。', 'sc-life-theme'); ?></p>
			</div>
			<div class="contact-actions">
				<a class="button button-primary" href="mailto:contact@example.com"><?php esc_html_e('メールで相談する', 'sc-life-theme'); ?></a>
				<a class="button button-secondary" href="tel:+81312345678"><?php esc_html_e('03-1234-5678 に電話する', 'sc-life-theme'); ?></a>
				<p class="contact-note"><?php esc_html_e('平日 9:00-18:00 / 見積依頼・EOL相談・代替提案の初回整理に対応', 'sc-life-theme'); ?></p>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
