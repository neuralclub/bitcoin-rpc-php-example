<?php

require_once('easybitcoin.php');

$bitcoin = new Bitcoin('zhaochong','123456','127.0.0.1','8332');


$info = $bitcoin->getinfo();
var_dump($info);

$blockcount = $bitcoin->getblockcount();
var_dump("blockcount:".$blockcount);

$blockhash = $bitcoin->getblockhash($blockcount);
var_dump("block hash:".$blockhash);

$block = $bitcoin->getblock($blockhash);
var_dump($block);


?>
