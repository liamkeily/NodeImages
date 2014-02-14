<?php
if(isset($images[0]['NodeImage'])){
	echo $this->Image->resize($images[0]['NodeImage']['url'],250,250,true,array('class'=>'feature-image'));
}
