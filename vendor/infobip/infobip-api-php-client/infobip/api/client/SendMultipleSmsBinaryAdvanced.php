<?php

namespace infobip\api\client;

use infobip\api\model\sms\mt\send\binary\SMSAdvancedBinaryRequest;
use infobip\api\AbstractApiClient;
use infobip\api\model\sms\mt\send\SMSResponse;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class SendMultipleSmsBinaryAdvanced extends AbstractApiClient
{

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param SMSAdvancedBinaryRequest $body
     * @return SMSResponse
     */
    public function execute(SMSAdvancedBinaryRequest $body) {
        $restPath = $this->getRestUrl("/sms/1/binary/advanced");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new SMSResponse));
    }

}