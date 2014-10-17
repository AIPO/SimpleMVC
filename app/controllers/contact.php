<?php

class Contact {

    public function index($name = '', $secondName = '') { //perduoti parametrai per url
        echo $name . ' ' . $secondName;
    }

}
