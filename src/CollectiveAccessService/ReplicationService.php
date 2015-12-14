<?php

namespace CollectiveAccessService;

class ReplicationService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url,$ps_call){
		parent::__construct($ps_base_url,"replication");

		$this->setRequestMethod("GET");
		$this->setTable($ps_call);
	}
	# ----------------------------------------------
}
