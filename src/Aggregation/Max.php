<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Aggregation;


/**
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-terms-aggregation.html
 */
class Max implements LeafAggregationInterface
{

	/**
	 * @var string
	 */
	private $key;

	/**
	 * @var string
	 */
	private $field;

	public function __construct(string $key, string $field)
	{
		$this->key = $key;
		$this->field = $field;
	}

	public function key() : string
	{
		return $this->key;
	}


	public function toArray() : array
	{
		$array = [
			'max' => [
				'field' => $this->field
			]
		];

		return $array;
	}

}
