<?php

/**
 * Write by Emmanuel Lucio Urbina
 * https://github.com/vidaencodigo
 * @emmanuelluur
 * 2023
 * 
 * feel free to modify and share in your projects
 */

class GetThumbnail
{

    /**
     * simple script to get thumbnail from YT video
     * use as 
     * @url = YT view as url or share video
     * Method get_thumbnail() return all image yt thumbail
     * to shaer only call he method and call the property @thumbnail
     */
    public $url;
    private $videoId;
    public $thumbnail;
    private function getYouTubeVideoId()
    {
        $link = $this->url;
        $this->videoId = explode("?v=", $link);
        if (!isset($this->videoId[1])) {
            $this->videoId = explode("youtu.be/", $link);
        }
        $youtubeID = $this->videoId[1];
        if (empty($this->videoId[1])) $this->videoId = explode("/v/", $link);
        $this->videoId = explode("&", $this->videoId[1]);
        $youtubeVideoID = $this->videoId[0];
        if ($youtubeVideoID) {
            return $youtubeVideoID;
        } else {
            return false;
        }
    }
    public function get_thumbnail()
    {
        $youtubeID = $this->getYouTubeVideoId();
        $thumbURL = 'https://img.youtube.com/vi/' . $youtubeID . '/mqdefault.jpg';
        $this->thumbnail = $thumbURL;
    }
    
}

