<?php declare(strict_types = 1);

namespace Spameri\ElasticQuery\Mapping\Filter\Stop;

/**
 * @see https://github.com/apache/lucene-solr/tree/master/solr/example/files/conf/lang
 */
class Irish extends \Spameri\ElasticQuery\Mapping\Filter\Stop
{

	public function getStopWords() : array
	{
		return [
			\Spameri\ElasticQuery\Mapping\Analyzer\Stop\StopWords::IRISH,
		];
	}


	public function getName() : string
	{
		return 'irishStopWords';
	}

}
