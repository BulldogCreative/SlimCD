<?php

namespace SlimCD\Login;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetUserClientsRequest.
 *
 * Generates a list of all accessible client ids and the name of the client.
 * The list represents client ids available for a particular username/
 * password in the user hierarchy.
 */
class GetUserClientsRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username = '';

    /**
     * Plaintext password for the client account.
     *
     * @var string
     */
    public $password = '';

    use jsonSerializeTrait;
}
