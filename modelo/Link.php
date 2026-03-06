<?php

class Link{
    //Atributos
    private  $linkImg;
    private  $info;

    //Métodos

   public function __construct($link, $info){
    $this->linkImg = $link;
    $this->info = $info;
}

    

    /**
     * Get the value of linkImg
     */
    public function getLinkImg()
    {
        return $this->linkImg;
    }

    /**
     * Set the value of linkImg
     */
    public function setLinkImg($linkImg): self
    {
        $this->linkImg = $linkImg;

        return $this;
    }

    /**
     * Get the value of info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     */
    public function setInfo($info): self
    {
        $this->info = $info;

        return $this;
    }
}