<?php
    /**
     * Created by PhpStorm.
     * User: brunopaz
     * Date: 2018-12-26
     * Time: 22:01
     */

    namespace Gateway\API;

    use Exception;

    /**
     * Class Customer
     *
     * @package Gateway\API
     */
    class Customer implements \JsonSerializable
    {

        /**
         * @var
         */
        private $customerIdentity;
        /**
         * @var
         */
        private $cpf;

        /**
         * @var
         */
        private $name = "";
        /**
         * @var
         */
        private $address = "";
        /**
         * @var
         */
        private $address2 = "";
        /**
         * @var
         */
        private $city = "";
        /**
         * @var
         */
        private $state = "";
        /**
         * @var
         */
        private $postalCode = "";
        /**
         * @var
         */
        private $country = "BRA";
        /**
         * @var
         */
        private $phone = "";
        /**
         * @var
         */
        private $email = "";

        /**
         * @param array $customer
         * @return Customer
         */
        public function fill(array $customer)
        {
            foreach ($this as $key => $value) {
                if (array_key_exists($key, $customer)) {
                    $this->$key = $customer[$key];
                }
            }
            return $this;
        }

        /**
         * @return array|mixed
         */
        public function jsonSerialize()
        {
            return get_object_vars($this);
        }

        /**
         * @return mixed
         */
        public function getCustomerIdentity()
        {
            return $this->customerIdentity;
        }

        /**
         * @param $customerIdentity
         * @return $this
         * @throws Exception
         */
        public function setCustomerIdentity($customerIdentity)
        {
            if (!is_string($customerIdentity)) {
                throw new Exception('setCustomerIdentity must be a string!');
            }
            if (strlen($customerIdentity) >= 12) {
                throw new Exception('setCustomerIdentity must be less than 13 characters');
            }
            $this->customerIdentity = $customerIdentity;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param $name
         * @return $this
         * @throws Exception
         */
        public function setName($name)
        {
            if (!is_string($name)) {
                throw new Exception('setName must be a string!');
            }
            if (strlen($name) >= 255) {
                throw new Exception('setName must be less than 255 characters');
            }
            $this->name = $name;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getAddress()
        {
            return $this->address;
        }


        /**
         * @param $address
         * @return $this
         * @throws Exception
         */
        public function setAddress($address)
        {
            if (!is_string($address)) {
                throw new Exception('setAddress must be a string!');
            }
            if (strlen($address) >= 255) {
                throw new Exception('setAddress must be less than 255 characters');
            }
            $this->address = $address;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getAddress2()
        {
            return $this->address2;
        }


        /**
         * @param $address2
         * @return $this
         * @throws Exception
         */
        public function setAddress2($address2)
        {
            if (!is_string($address2)) {
                throw new Exception('setAddress2 must be a string!');
            }
            if (strlen($address2) >= 255) {
                throw new Exception('setAddress2 must be less than 255 characters');
            }
            $this->address2 = $address2;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getCity()
        {
            return $this->city;
        }


        /**
         * @param $city
         * @return $this
         * @throws Exception
         */
        public function setCity($city)
        {
            if (!is_string($city)) {
                throw new Exception('setCity must be a string!');
            }
            if (strlen($city) >= 255) {
                throw new Exception('setCity must be less than 255 characters');
            }
            $this->city = $city;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getState()
        {
            return $this->state;
        }


        /**
         * @param $state
         * @return $this
         * @throws Exception
         */
        public function setState($state)
        {
            if (!is_string($state)) {
                throw new Exception('setState must be a string!');
            }
            if (strlen($state) >= 255) {
                throw new Exception('setState must be less than 255 characters');
            }
            $this->state = $state;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getPostalCode()
        {
            return $this->postalCode;
        }


        /**
         * @param $postalCode
         * @return $this
         * @throws Exception
         */
        public function setPostalCode($postalCode)
        {
            if (!is_string($postalCode)) {
                throw new Exception('setPostalCode must be a string!');
            }
            if (strlen($postalCode) >= 255) {
                throw new Exception('setPostalCode must be less than 255 characters');
            }
            $this->postalCode = $postalCode;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getCountry()
        {
            return $this->country;
        }


        /**
         * @param $country
         * @return $this
         * @throws Exception
         */
        public function setCountry($country)
        {
            if (!is_string($country)) {
                throw new Exception('setCountry must be a string!');
            }
            if (strlen($country) >= 255) {
                throw new Exception('setCountry must be less than 255 characters');
            }

            $this->country = $country;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getPhone()
        {
            return $this->phone;
        }


        /**
         * @param $phone
         * @return $this
         * @throws Exception
         */
        public function setPhone($phone)
        {
            if (!is_string($phone)) {
                throw new Exception('setCountry must be a string!');
            }
            if (strlen($phone) >= 20) {
                throw new Exception('setCountry must be less than 20 characters');
            }
            $this->phone = $phone;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }


        /**
         * @param $email
         * @return $this
         * @throws Exception
         */
        public function setEmail($email)
        {
            if (!is_string($email)) {
                throw new Exception('setEmail must be a string!');
            }
            if (strlen($email) >= 200) {
                throw new Exception('setEmail must be less than 200 characters');
            }
            $this->email = $email;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getCpf()
        {
            return $this->cpf;
        }


        /**
         * @param $cpf
         * @return $this
         * @throws Exception
         */
        public function setCpf($cpf)
        {

            if (!is_numeric($cpf)) {
                throw new Exception('setCpf must be a numeric!');
            }
            if (strlen($cpf) != 11) {
                throw new Exception('setCpf must be 11 characters');
            }

            $this->cpf = $cpf;
            return $this;
        }


    }
