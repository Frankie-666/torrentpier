<?php

namespace Tp\Cache\Adapter;

class Memcached {
	
	function config() {
		return [
			'servers' => [
				['127.0.0.1', '11211']
			]
		];
	}
}