<?php

namespace Sabberworm\CSS\Parsing;

/**
* Thrown if the CSS parsers attempts to print something invalid
*/
class OutputException extends \Exception {
    private $iLineNo;
    public function __construct($sMessage, $iLineNo = 0)
    {
        $this->$iLineNo = $iLineNo;
        if (!empty($iLineNo)) {
            $sMessage .= " [line no: $iLineNo]";
        }
        parent::__construct($sMessage);
    }
}