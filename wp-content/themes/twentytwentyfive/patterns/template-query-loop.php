<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfive/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: Ping Digital Marketing 2-Column Side-by-Side Card Grid
 */
?>
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull pdm-query-wrap">
	<!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
		<div class="pdm-card-inner">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			<div class="pdm-card-body">
				<!-- wp:post-terms {"term":"category","className":"pdm-post-category"} /-->
				<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
				<!-- wp:post-excerpt {"moreText":"Read Complete Playbook →"} /-->
				<div class="pdm-card-footer">
					<!-- wp:post-author-name {"isLink":true} /-->
					<!-- wp:post-date {"isLink":true} /-->
				</div>
			</div>
		</div>
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
