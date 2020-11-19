<?php

namespace Chapdel\NotchRelay;

/**
 * Notch Relay API wrapper
 * http://notchrelay.xyz/docs
 *
 * @author  Chapdel KAMGA <me@chapdel.xyz>
 * @version 1.0
 */

use Curl\Curl;

class NotchRelay
{
    public $curl;
    public $api_key;
    public $base_url = 'http://notch-relay.test/api';
    //public $base_url = 'http://notchrelay.xyz/api';

    /**
     * Create a new instance
     *
     * @param string $api_key      Your Notch Relay API key
     *
     * @throws \Exception
     */
    public function __construct($api_key = null)
    {
        $this->curl = new Curl();
        $this->api_key = $api_key;
        $this->curl->setDefaultUserAgent();
        $this->curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        $this->curl->setHeader('Accept', 'application/json');
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->setHeader('Authorization', "Bearer $this->api_key");
    }

    /**
     * Susbcribe
     *
     * @param string $email    Customer email
     * @param string $list_id    Notch Relay List ID
     *
     * @return bool
     */
    public function subscribe($email, $list_id)
    {
        $this->curl->post("$this->base_url/contacts", array(
            'email' => $email,
            'uid' => $list_id,
        ));

        if ($this->curl->error) {

            return false;
        }

        return true;
    }

    /**
     * Susbcribe or Update Subscription
     *
     * @param string $email    Customer email
     * @param string $list_id    Notch Relay List ID
     *
     * @return bool
     */
    public function subscribeOrUpdate($email, $list_id)
    {
        $this->curl->put("$this->base_url/contacts", array(
            'email' => $email,
            'uid' => $list_id,
        ));

        if ($this->curl->error) {
            return false;
        }

        return true;
    }

    /**
     * Unsusbcribe
     *
     * @param string $email    Customer email
     * @param string $list_id    Notch Relay List ID
     *
     * @return bool
     */
    public function unsubscribe($email, $list_id)
    {
        $this->curl->delete("$this->base_url/contacts", array(
            'email' => $email,
            'uid' => $list_id,
        ));

        if ($this->curl->error) {
            return false;
        }

        return true;
    }
}
