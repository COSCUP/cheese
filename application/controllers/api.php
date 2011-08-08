<?php

class Api extends CI_Controller {
	
	
	function index(){
		$tag = "coscup2u";
		$MaxPhoto = 300;
		$ban[0] = '';
		
		//$this->load->library('yql_lib');
		
		$i = 0;
		$cache_time = 10 * 60; // 10 mins
		
		$this->load->driver('cache', array('adapter' => 'file', 'backup' => 'dummy'));
		
		if ( ! $ImgList = $this->cache->get('ImgList')){
				
			
			//flcikr
			
			/*$yql_query = 'select * from flickr.photos.search where text="' . $tag . '" limit '.$MaxPhoto*1/4;
			
			$ImgSearch = $this->yql_lib->query($yql_query);
			
			foreach ($ImgSearch->photo as $row){
				$yql_query = 'select * from flickr.photos.info where photo_id='.$row->id ;
				$img = $this->yql_lib->query($yql_query);
				
				$ImgList[$i]->photo_id = "1".$row->id;
				$ImgList[$i]->serv_id = 1;
				$ImgList[$i]->likes = 0;
				$ImgList[$i]->thumbnail = "http://farm".$img->photo->farm.".static.flickr.com/".$img->photo->server."/".$img->photo->id."_".$img->photo->secret."_s.jpg";
				$ImgList[$i]->photo_url = "http://farm".$img->photo->farm.".static.flickr.com/".$img->photo->server."/".$img->photo->id."_".$img->photo->secret.".jpg";
				$ImgList[$i]->photo_link = $img->photo->urls->url->content;
				$ImgList[$i]->author = $img->photo->owner->realname;
				
				$yql_query = 'select * from flickr.photos.exif where photo_id='.$row->id;
				$ImgExif = $this->yql_lib->query($yql_query);
				$timeArr = sscanf($ImgExif->photo->exif['11']->raw, '%d:%d:%d %d:%d:%d');
				$ImgList[$i]->timestamp = strtotime($ImgExif->photo->exif['11']->raw);
				
				$i ++;
			}*/
			
			//set_include_path(".");
			set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));
			require_once("Zend/Loader.php");
			
			Zend_Loader::loadClass('Zend_Gdata_Photos');
			Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
			Zend_Loader::loadClass('Zend_Gdata_AuthSub');
			
			$gp = new Zend_Gdata_Photos(null, "Google-DevelopersGuide-1.0");
			$query = $gp->newQuery("http://picasaweb.google.com/data/feed/api/all");
			$query->setQuery($tag);
			//$query->setImgMax("160c");
			$query->setMaxResults($MaxPhoto);
			$userFeed = $gp->getUserFeed(null, $query);
			
			/*$query = new Zend_Gdata_Photos_UserQuery();
			$query->setTag($tag);
			$query->setThumbsize("160c");
			$query->setMaxResults($MaxPhoto/2);
			$userFeed = $gp->getUserFeed(null, $query);*/
			
			$flag_exist = 0;
			foreach ($userFeed as $photoEntry) {
				
				if ($photoEntry->getMediaGroup()->getContent() != null){
					$flag_exist = 1;
					$mediaContentArray = $photoEntry->getMediaGroup()->getContent();
					
					$photo_id = $photoEntry->getGphotoId()->getText();
					$flag = 0;
					foreach ($ban as $banID){
						if($photo_id == $banID){
							$flag = 1;
						}
					}
					if($flag){
						continue;
					}
					$serv_id = 0;
					$likes = 0;
					if ($photoEntry->getExifTags() != null && $photoEntry->getExifTags()->getMake() != null && $photoEntry->getExifTags()->getModel() != null) {
						$timestamp = $photoEntry->getExifTags()->getTime()->getText();
						$time_flag = 0;
					}else{
						$timestamp = $photoEntry->getGphotoTimestamp()->getText();
						$time_flag = 1;
						if(!isset($timestamp)){
							continue;
						}
					}
					if ($photoEntry->getMediaGroup()->getThumbnail() != null) {
						$mediaThumbnailArray = $photoEntry->getMediaGroup()->getThumbnail();
						//$thumbnail = $mediaThumbnailArray[1]->getUrl()."?crop=1";
						$mediaCreditArray = $photoEntry->getMediaGroup()->getCredit();
						$author = $mediaCreditArray[0]->getText();
					}
					$photo_url = $mediaContentArray[0]->getUrl();
					$photo_link = $photoEntry->getLink('alternate')->getHref();
					$thumbnail = $photo_url."?imgmax=144&crop=1";
					
		
					$ImgList[$i]->photo_id = $photo_id;
					$ImgList[$i]->timestamp = substr($timestamp, 0, 10);
					$ImgList[$i]->thumbnail = $thumbnail;
					$ImgList[$i]->photo_url = $photo_url."?imgmax=640";
					$ImgList[$i]->photo_link = $photo_link;
					$ImgList[$i]->author = $author;
					$ImgList[$i]->time_flag = $time_flag;
					
					$i = $i + 1;
					
				}
				
			}
			if($flag_exist){
				$this->load->helper("quicksort");
				$ImgList = quicksort($ImgList);
			}
			$ImgList = json_encode($ImgList);
			$this->cache->save('ImgList', $ImgList, $cache_time);
		}
		
		$this->output->set_header('Content-Type: text/javascript');
		echo $ImgList;
		
	}
	
}
?>