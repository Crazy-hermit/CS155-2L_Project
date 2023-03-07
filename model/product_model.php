<?php

class Product implements JsonSerializable { //NOTE: implements JsonSerializable to be encoded in JSON format
    private $id;
    private $name;
    private $price;
    private $image;

    function __construct($id, $name, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = 'image/'. $image;
    }

    function get_id() {
        return $this->id;
    }

    function set_id($id) {
        $this->id = $id;
    }
    
    function get_name() {
        return $this->name;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_price() {
        return $this->price;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function get_image() {
        return $this->image;
    }

    function set_image($image) {
        $this->image = $image;
    }

    function jsonSerialize() {
        return [
            'id' => $this->get_id(),
            'title' => $this->get_name(), //NOTE: this should be named "name" but it would not work with pre-existing code
            'price' => intval($this->get_price()),
            'image' => $this->get_image()
        ];
    }
}

?>