<?php
/**
 * This file is part of the Elastic Site Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\SiteSearch\Client\Endpoint;

/**
 * Implementation of the CreateOrUpdateDocuments endpoint.
 *
 * @package Elastic\SiteSearch\Client\Endpoint
 */
class CreateOrUpdateDocuments extends \Elastic\OpenApi\Codegen\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $uri = '/engines/{engine_name}/document_types/{document_type_id}/documents/bulk_create_or_update_verbose';

    protected $routeParams = ['engine_name', 'document_type_id'];

    protected $paramWhitelist = ['documents'];
    // phpcs:enable
}
