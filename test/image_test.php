<?php
class Image {

    /**
     * 파일 타입을 지정합니다.
     * @var string
     */
    protected $content;
    /**
     * 파일의 경로를 지정합니다.
     * @var string
     */
    private $path;

    function __construct()
    {
        $this->content = "Content-Type:image/png";
        $this->path = "../image/image.png";
    }

    function getImage()
    {
        header('Content-type:image/png');
        $fp = fopen($this->path, "r");
        fpassthru($fp);
    }
}
?>