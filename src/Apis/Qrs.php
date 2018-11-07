<?php namespace ConsumerRewards\SDK\Apis;

use ConsumerRewards\SDK\Exception\ConsumerRewardsException;
use ConsumerRewards\SDK\Exception\InvalidQrException;
use ConsumerRewards\SDK\Tools\Container;
use ConsumerRewards\SDK\Tools\NetTools;
use ConsumerRewards\SDK\Transfer\Qr;
use Psr\Log\LoggerInterface;

class Qrs extends ApiGeneric
{
    const ENDPOINT = '/qrs/';

    /**
     * Qrs Api
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get Qr by indentifier
     *
     * @param string $objectId
     * @return Qr
     * @throws InvalidQrException
     */
    public function findById(string $objectId) : Qr
    {
        try {
            $request = $this->http->getAuthenticatedRequest(
                NetTools::HTTP_GET,
                $this->http->buildApiUrl(Qrs::ENDPOINT . $objectId),
                Container::get('JWT')->getBearer()
            );

            return $this->http->getSerializedResponse($request, Qr::class);
        } catch (ConsumerRewardsException $e) {
            $this->logger->error($e->getMessage());
            throw new InvalidQrException($e->getMessage());
        }
    }

}