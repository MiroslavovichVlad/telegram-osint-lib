<?php

namespace TelegramOSINT\Auth;

class AuthParams
{
    private string $authKey;
    private string $serverSalt;

    /**
     * @param string $authKey
     * @param string $serverSalt
     */
    public function __construct($authKey, $serverSalt)
    {
        $this->authKey = $authKey;
        $this->serverSalt = $serverSalt;
    }

    /**
     * @return string binary
     */
    public function getAuthKey(): string
    {
        return $this->authKey;
    }

    public function getAuthKeyId(): string
    {
        return substr(sha1($this->authKey, true), -8);
    }

    /**
     * @return string binary
     */
    public function getServerSalt(): string
    {
        return $this->serverSalt;
    }
}
