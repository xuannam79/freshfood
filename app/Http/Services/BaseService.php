<?php

namespace App\Http\Services;

use Log;

/**
 * Base service class
 */
class BaseService {
    public $logger;

    /**
     * Logger error
     *
     * @param Exception|string $e
     *
     * @return void
     */
    public function logError($e)
    {
        if ($e instanceof Exception) {
            $this->logger->error($e->getMessage() . ' on line ' . $e->getLine() . ' of file ' . $e->getFile());
        } else {
            $this->logger->error($e);
        }
    }

    /**
     * Logger info
     *
     * @param string $message
     *
     * @return void
     */
    public function logInfo($message)
    {
        return $this->logger->info($message);
    }
}
