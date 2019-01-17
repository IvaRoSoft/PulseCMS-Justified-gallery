<style>
.gallery {
	display: flex;
	overflow: hidden;
	flex-wrap: wrap;
	margin: -2.5px;
}
.gallery:after {
	content: '';
	flex-grow: 999999999;
	min-width: 300px;
	height: 0;
}
.gallery > * {
	position: relative;
	display: block;
	height: 300px;
	margin: 2.5px;
	flex-grow: 1;
}
.gallery > * > img {
	height: 300px;
	object-fit: cover;
	max-width: 100%;
	min-width: 100%;
	vertical-align: bottom;
}
.gallery.gallery-margin {
	margin: 2.5px;
}
</style>

<link rel="stylesheet" href="<?php echo $path; ?>/inc/tags/css/magnific-popup.css">
<script src="<?php echo $path; ?>/inc/plugins/lightbox/jquery.magnific-popup.min.js"></script>

<div class="gallery gallery-margin">

<?php
$galdir = $tag_var1;
$images = glob("content/media/{$galdir}/*");
$taken  = array();
$path_new = '/';
if (!empty($path)) {
	$path_new = $path.'/';
}

$opFile = "content/media/{$galdir}/gallery.txt";

if (file_exists($opFile)) { 
	$fp          = fopen($opFile,"r");    	
	$data        = @fread($fp, filesize($opFile));
	fclose($fp);
	$line        = explode("\n", $data);		


	foreach($line as $test){
		if(!empty($test)){
    		$test_line[] = explode("|", $test); 
		}     	        
	}
        
	foreach ($test_line as $t){
		$image = "content/media/{$galdir}/" . $t[0];
		$info  = pathinfo($image);
		$ext   = $info['extension'];
		if ($ext != 'txt' || empty($ext)) {
			$taken[] = $image;
			echo "<a title=\"$t[2]\" href='{$path_new}{$image}'><img src='{$path_new}{$image}'></a>";
		}  
	}
}

foreach ($images as $image) { 
	if (!in_array($image, $taken)){
		$info = pathinfo($image);
		$ext  = $info['extension'];
		if ($ext != 'txt') {
				echo "<a title='' href='{$path_new}{$image}'><img src='{$path_new}{$image}'></a>";
		}
	}
}

unset($galdir,$images,$test_line,$tag_var1,$image,$opFile,$line,$fp,$data,$test,$taken);
?>

</div>

<script>
$('.gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a', 
        type: 'image',
        disableOn: 10,
        gallery:{enabled:true}
    });
}); 
</script>