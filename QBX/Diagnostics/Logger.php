<?php

namespace QBX\Diagnostics;

use QBX\Diagnostics\TraceLevel;

/**
 * This file contains an interface for Logging.
 */
class Logger
{

    /**
     * Logs messages depending on the ids trace level.
     *
     * @param TraceLevel $idsTraceLevel IDS Trace Level.
     * @param string $messageToWrite The message to write.
     *
     */
    public function Log($idsTraceLevel, $messageToWrite)
    {
        file_put_contents(PATH_SDK_ROOT . 'executionlog.txt', $messageToWrite . "\n", FILE_APPEND);
    }

}

?>
