<?php

require_once(__DIR__ . '/../model/transaction_model.php'); //NOTE: __DIR__ needs to be added to go up one folder/level (same goes for other with __DIR__)
require_once(__DIR__ . '/../config.php');

class TransactionController {

    //TODO: maybe add check database connection status on constructor?

    function get_all_transactions() {
        global $conn;
        $sql  = "SELECT * FROM transaction";
        $result = $conn->query($sql);

        $transactions = array();
        while($row = $result->fetch_assoc()) {
            $transactions[] = new Transaction($row['transaction_id'], $row['acct_id'], $row['address'], $row['total_price'], $row['status']);
        }

        return $transactions;
    }

    function update_transaction($transaction_obj) {
        global $conn;
        $sql = "UPDATE transaction SET acct_id=?, address=?, total_price=?, status=? WHERE transaction_id = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("isisi", $param_account_id, $param_address, $param_total_price, $param_status, $param_transaction_id);

            $param_transaction_id = $transaction_obj->get_id();
            $param_customer_id = $transaction_obj->get_customer_id();
            $param_address = $transaction_obj->get_address();
            $param_total_price = $transaction_obj->get_total_price();
            $param_status = $transaction_obj->get_status();

            $stmt->execute();
        }
    }

    function add_transaction($transaction_obj) {
        global $conn;
        $sql = "INSERT INTO transaction (acct_id, address, total_price, status) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("isis", $param_account_id, $param_address, $param_total_price, $param_status);

            $param_customer_id = $transaction_obj->get_customer_id();
            $param_total_price = $transaction_obj->get_total_price();
            $param_status = $transaction_obj->get_status();

            $stmt->execute();
        }
    }
}

?>