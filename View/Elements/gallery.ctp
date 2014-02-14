<?php
if(count($images) > 1){
	echo '<div class="image_gallery">';
	foreach($images as $image){
		echo '<div class="image">';
		echo $this->Html->link($this->Image->resize($image['NodeImage']['url'],110,110,true),$this->Html->url('/').$image['NodeImage']['url'],array('escape'=>false,'data-lightbox'=>'gallery'));
		echo '</div>';

	}
	echo '<div class="clearfix"></div>';
	echo '</div>';
}
