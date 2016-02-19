<?php

class Navigation{

    public $arrLinks;
    public $arrFull = array();
    public $arrImages = array();

    // добавление элемента в массив
    public function add_item ($title, $url){
        $n=sizeof($this->arrLinks);
        $this->arrLinks[$n]['title']=trim($title);
        $this->arrLinks[$n]['url']=trim($url);
    }

    //создание навигации
    public function nav_create(){
        $links_arr=$this->arrLinks;
        $c=sizeof($links_arr);
        $array = array();
        $array_images = array();
        for ($i = 0; $i < $c; $i++) {
            if (!$links_arr[$i]['url']) {
                $array[$i] = $links_arr[$i]['title'];
            } elseif (!$i % 2) {
                $array[$i] = "<a href=\"" . $links_arr[$i]['url']."?id=".$i. "\"
                    target=\"_blank\">" .
                    "<img src=\"Images/" . $links_arr[$i]['title'] . ".jpg\"
                    title=\"" . $links_arr[$i]['title'] . "\" width=\"200px\"
                    height=\"100px\" style=\"float:left;\" >" . "</a>";
                $array_images[$i] = $links_arr[$i]['title'];
            } else {
                $array[$i] = "<a href=\"" . $links_arr[$i]['url']."?id=".$i."\"
                    target=\"_blank\" >" .
                    "<img src=\"Images/" . $links_arr[$i]['title'] . ".jpg\"
                    title=\"" . $links_arr[$i]['title'] . "\" width=\"200px\"
                    height=\"100px\" >" . "</a>";
                $array_images[$i] = $links_arr[$i]['title'];
            }
        }
        $this->arrFull = $array;
        $this->arrImages = $array_images;
    }

    public function show_array(){
        foreach ($this->arrFull as $value){
            echo $value;
        }
    }

}