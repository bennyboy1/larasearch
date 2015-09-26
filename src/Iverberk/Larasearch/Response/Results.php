<?php namespace Iverberk\Larasearch\Response;

use Illuminate\Support\Collection;
use Iverberk\Larasearch\Response;

class Results extends Collection {

    /**
     * Contains an Elasticsearch response wrapper
     *
     * @var \Iverberk\Larasearch\Response
     */
    private $response;

    /**
     * Construct a collection of Result objects based on the hits
     * in the Elasticsearch response
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;

        parent::__construct(
            $this->response
        );
    }

}
