<?php
/**
 * This file is part of the Elastic Site Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\SiteSearch\Client\Endpoint;

/**
 * Implementation of the DeleteDocumentType endpoint.
 *
 * @package Elastic\SiteSearch\Client\Endpoint
 */
class DeleteDocumentType extends \Elastic\OpenApi\Codegen\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * @var string
     */
    protected $uri = '/engines/{engine_name}/document_types/{document_type_id}.json';

    protected $routeParams = ['engine_name', 'document_type_id'];
    // phpcs:enable
}
