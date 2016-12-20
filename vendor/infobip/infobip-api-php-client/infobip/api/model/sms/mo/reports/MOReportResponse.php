<?php
namespace infobip\api\model\sms\mo\reports;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class MOReportResponse implements \JsonSerializable
{
    /**
     * @var \infobip\api\model\sms\mo\reports\MOReport[]
     */
    private $results;


    /**
     * @param \infobip\api\model\sms\mo\reports\MOReport[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return \infobip\api\model\sms\mo\reports\MOReport[]
     */
    public function getResults()
    {
        return $this->results;
    }


  /**
   * (PHP 5 &gt;= 5.4.0)
   * Specify data which should be serialized to JSON
   * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by json_encode,
   * which is a value of any type other than a resource.
   */
  function jsonSerialize()
  {
      return get_object_vars($this);
  }
}

?>