<?php

/*
 * This file is part of the WordPressAPIClient project.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace WordPressApiClient;

use \GuzzleHttp\Client as GuzzleClient;

class Client
{
    private $client;
    private $domain;

    public function __construct(GuzzleClient $client, string $domain)
    {
        $this->client = $client;
        $this->domain = $domain;
    }

    public function getResourceBySlug(string $resourceType, string $slug) : ?array
    {
        $response = $this->client->request('GET',
            sprintf($this->domain . '/wp-json/wp/v2/%s?slug=%s', $resourceType, $slug)
        );

        $resources = json_decode($response->getBody()->getContents(), true);

        return 0 === count($resources) ? null : current($resources);
    }

    public function getResourcesByQuery(string $resourceType, string $query) : ?array
    {
        $response = $this->client->request('GET',
            sprintf($this->domain . '/wp-json/wp/v2/%s?%s', $resourceType, $query)
        );

        $resources = json_decode($response->getBody()->getContents(), true);

        return $resources;
    }

    public function getResourceById(string $resourceType, string $id) : ?array
    {
        $response = $this->client->request('GET',
            sprintf($this->domain . '/wp-json/wp/v2/%s/%s', $resourceType, $id)
        );

        $resources = json_decode($response->getBody()->getContents(), true);

        return 0 === count($resources) ? null : current($resources);
    }
}

