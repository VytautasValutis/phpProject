<?php

class Color extends Word implements FontSize {

    public function 
    public $color = [
        'red',
        'blue',
        'green',
        'yellow'
    ];

    return $color[rand(0,3)];

    public function fontSize() 
    {
        return '<style>h2{font-size:'.rand(20,60).'px;}</style>';
    }

}
