<?php

//NOTE: lazy workaround because I don't want to change the existing code too much

if(!empty($_GET['cust_id'])&&!empty($_GET['price'])) {
    require_once(__DIR__ . '/../model/transaction_model.php');
    require_once(__DIR__ . '/../controller/transaction_controller.php');
    $transaction_obj = new Transaction(0, $_SESSION['acct_id'], $_GET['address'], $_GET['price'], 'Processing');
    $transaction_controller = new TransactionController();
    $transaction_controller->add_transaction($transaction_obj);
}

?>