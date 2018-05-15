<?php
use GuzzleHttp\Client;
use Bravist\CheShiBen\Push;
use PHPUnit\Framework\TestCase;

class HttpTest extends TestCase
{
	public function testPush()
	{
		$pusher = new Push(new Client(), 'http://116.62.163.75:9080/api/cheshiben/fittingquotepush');
		$res = $pusher->send('13500000012', '你收到了一个宝马3系新询价');
		print_r($res);
	}	
}