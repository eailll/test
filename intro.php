<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<style>
	.page-content { line-height:22px; word-break: keep-all; word-wrap: break-word; }
	.page-content p { margin:0 0 15px; padding:0; }
	.page-content .slogan { font-size:25px; letter-spacing:-1px; margin-bottom:15px; line-height:34px; }
	.page-content .slogan i { font-size:17px; vertical-align:top; margin-top:6px; }
	.root_daum_roughmap_landing {max-width: 1200px;width:100% !important; margin:0 auto; background-color: #fff;padding: 0 20px}
</style>

<div class="page-content">

	<h3 class="slogan text-center">
		<i class="fa fa-quote-left"></i>
		세상을 바꾸는 <span class="green">작은</span> 힘
		<i class="fa fa-quote-right"></i>
	</h3>

	<p class="text-center text-muted">
		가정에 건강과 행복이 가득하기를 기도합니다.
	</p>

	<p class="text-center">
		<!-- * Daum 지도 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1515036904123" class="root_daum_roughmap root_daum_roughmap_landing"></div>

		<!--
			2. 설치 스크립트
			* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1515036904123",
				"key" : "m7mw",
				"mapWidth" : "990",
				"mapHeight" : "300"
			}).render();
		</script>
	</p>

</div>

<div class="h30"></div>
