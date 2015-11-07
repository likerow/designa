<?php
 include_once 'vendor/autoload.php';
 use Alaouy\Youtube\Youtube;
class Tube 
{
    public $youtube;
    
    public function __construct() {
        $this->youtube = new Alaouy\Youtube\Youtube('AIzaSyBVIIbGbDwRjWP32kxm5grxI3kQ3KF8ILg');
        
    }

    public function run() {
        $response = $this->youtube->searchVideos(
                'chincha',  
                10);
        foreach ($response as $value) {
            $data = $this->youtube->getVideoInfo($value->id->videoId);
            var_dump($data);exit;
        }
        
    }
    
}
$tube = new Tube();
$tube->run();
