<?php

class Transaction implements JsonSerializable { //NOTE: implements JsonSerializable to be encoded in JSON format
    private $id;
    private $account_id;
    private $address;
    private $total_price;
    private $status;

    function __construct($id, $account_id, $address, $total_price, $status) {
        $this->id = $id;
        $this->account_id = $account_id;
        $this->address = $address;
        $this->total_price = intval($total_price);
        $this->status = $status;
    }

    function get_id() {
        return $this->id;
    }

    private function set_id($id) {
        $this->id = $id;
    }
    
    function get_account_id() {
        return $this->account_id;
    }

    function set_account_id($account_id) {
        $this->account_id = $account_id;
    }

    function get_address() {
        return $this->address;
    }

    function set_address($address) {
        $this->address = $address;
    }

    function get_total_price() {
        return $this->total_price;
    }

    function set_total_price($total_price) {
        $this->total_price = $total_price;
    }

    function get_status() {
        return $this->status;
    }

    function set_status($status) {
        $this->status = $status;
    }

    function jsonSerialize() {
        return [
            'transaction_id' => $this->get_id(),
            'account_id' => $this->get_account_id(),
            'address' => $this->get_address(),
            'total_price' => $this->get_total_price(),
            'status' => $this->get_status()
        ];
    }
}

?>