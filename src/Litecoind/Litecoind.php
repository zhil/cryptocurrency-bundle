<?php

namespace Analogic\CryptocurrencyBundle\Litecoind;

use Analogic\CryptocurrencyBundle\Bitcoind\BitcoindBase;

final class Litecoind extends BitcoindBase
{
    public function __construct(
        $dsn,
        $account,
        $estimateFeesBlocks,
        $minconf = 1,
        TransactionFactory $transactionFactory
    ) {
        parent::__construct($dsn, $account, $estimateFeesBlocks, $minconf, $transactionFactory);
    }
}