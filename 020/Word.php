<?php

abstract class Word {

    public function animal()
    {

        $animals = [
            'bebras',
            'zebras',
            'briedis',
            'barsukas'
        ];
        echo '
        <h2 style="color:'.$this->color().';"
        '.$animals[rand(0,3)].'</h2>';
    }
    abstract public function color();
}
