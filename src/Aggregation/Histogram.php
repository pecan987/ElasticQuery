<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Aggregation;


class Histogram implements LeafAggregationInterface
{

	/**
	 * @var string
	 */
	private $field;

	/**
	 * @var int
	 */
	private $interval;


	public function __construct(
		string $field,
		int $interval
	)
	{
		$this->field = $field;
		$this->interval = $interval;
	}


	public function key() : string
	{
		return $this->field;
	}


	public function toArray() : array
	{
		return [
			'histogram' => [
				'field'    => $this->field,
				'interval' => $this->interval,
			],
		];
	}
}
