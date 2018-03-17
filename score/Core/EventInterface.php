<?php
namespace Swoolefy\Core;

interface EventInterface {
	
	public function onWorkerStart($server, $worker_id);

	public function onConnet($server, $fd);

	public function onReceive($server, $fd, $reactor_id, $data);

	public function onTask($server, $task_id, $from_worker_id, $data);

	public function onFinish($server, $task_id, $data);

	public function onClose($server, $fd);
}
