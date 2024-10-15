<?php
if($blog){
	foreach ($blog as $res_blog) {
?>
<div class="postData col-lg-4 col-md-12">
	<div class="ts-case-box">
		<div class="blog-list-item">
		<img class="img-fluid-blog" src="<?php echo base_url().$res_blog->image;?>" alt="<?php echo $res_blog->title;?>">
		<div class="blog-content-list">
		<a class="link-more" href="<?php echo base_url() .'blog/'. $res_blog->category_slug .'-'. $res_blog->category_id; ?>"><small class="course-highlight"><?php echo $res_blog->category;?></small></a>
			<h1 class="case-title">
				<a href="<?php echo base_url() .'blog/'. $res_blog->slug .'-'. $res_blog->blog_id; ?>"><?php echo strip_tags((strlen($res_blog->title)>55)? substr($res_blog->title,0,55).'...' : $res_blog->title); ?></a>
			</h1>
			<p><a class="link-more" href="<?php echo base_url() .'blog/'. $res_blog->slug .'-'. $res_blog->blog_id; ?>">Read More <i class="icon icon-right-arrow2"></i></a></p>
		</div>
		</div>
	</div>
</div>
<?php } } ?>