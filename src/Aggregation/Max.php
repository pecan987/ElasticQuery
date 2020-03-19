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
	private $script;

	public function __construct(string $key, string $script)
	{
		$this->key = $key;
		$this->script = $script;
	}

	public function key() : string
	{
		return $this->key ?? $this->field;
	}


	public function toArray() : array
	{
		$array = [
			'max' => [
			    'script' => $this->script
            ]
		];

		return [
			$this->key => $array,
		];
	}

}
