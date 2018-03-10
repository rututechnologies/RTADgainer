<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;

class RequestRegistered
{
    use SerializesModels;

    private $requestData;
    private $idAgainstRequest;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($request,$idAgainstRequest)
    {
        $this->requestData = $request;
        $this->idAgainstRequest = $idAgainstRequest;
    }
    /**
     * @return mixed
     */
    public function getRequestData()
    {
        return $this->requestData;
    }

    /**
     * @param mixed $requestData
     */
    public function setRequestData($requestData)
    {
        $this->requestData = $requestData;
    }
    /**
     * @return mixed
     */
    public function getIdAgainstRequest()
    {
        return $this->idAgainstRequest;
    }

    /**
     * @param mixed $idAgainstRequest
     */
    public function setIdAgainstRequest($idAgainstRequest)
    {
        $this->idAgainstRequest = $idAgainstRequest;
    }
}
