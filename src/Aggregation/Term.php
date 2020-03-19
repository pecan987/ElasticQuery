<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Aggregation;


/**
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-terms-aggregation.html
 */
class Term implements LeafAggregationInterface
{

	/**
	 * @var string
	 */
	private $field;
	
	/**
	 * @var int
	 */
	private $size;
	
	/**
	 * @var ?int
	 */
	private $missing;

	/**
	 * @var ?string
	 */
	private $key;

    /**
     * @var array
     */
	private $order;


	public function __construct(
		string $field
		, int $size = 5
		, int $missing = NULL
		, string $key = NULL
        , array $order = NULL
	)
	{
		$this->field = $field;
		$this->size = $size;
		$this->missing = $missing;
		$this->key = $key;
		$this->order = $order;
	}


	public function key() : string
	{
		return $this->key ?? $this->field;
	}


	public function toArray() : array
	{
		$array = [
			'field' => $this->field,
			'size'  => $this->size,
		];

		if( $this->order !== NULL) {
		    $array['order'] = $this->order;
        }

		if ($this->missing !== NULL) {
			$array['missing'] = $this->missing;
		}

		return [
			'terms' => $array,
		];
	}

}
