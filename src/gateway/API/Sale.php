<?php
    /**
     * Created by PhpStorm.
     * User: brunopaz
     * Date: 2018-12-26
     * Time: 21:55
     */

    namespace Gateway\API;


    /**
     * Class Payments
     *
     * @package Gateway\API
     */
    class Sale extends Authorize
    {

        /**
         * @var
         */
        private $jsonRequest;


        /**
         * @param Transaction $transaction
         * @return mixed
         */
        public function setJsonRequest(Transaction $transaction)
        {
            $json["transaction-request"] = [
                "version"      => $transaction->getVersion(),
                "verification" => $transaction->getVerification(),
                "sale"         => [
                    "order"     => array_filter($transaction->getOrder()->jsonSerialize()),
                    "payment"   => array_filter($transaction->getPayment()->jsonSerialize()),
                    "billing"   => array_filter($transaction->getCustomer()->jsonSerialize()),
                    "urlReturn" => $transaction->getUrlReturn(),
                    "fraud"     => $transaction->getFraud(),

                ]
            ];

            return $this->jsonRequest = $json;
        }

        /**
         * @return false|string
         */
        public function toJSON()
        {
            return json_encode($this->jsonRequest, JSON_PRETTY_PRINT);
        }


    }
