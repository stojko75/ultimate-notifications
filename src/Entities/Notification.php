<?php

namespace Stojko\UltimateNotifications\Entities;

use DateTime;

class Notification
{
	public int $id;
	public int $receiver_id;
	public int $sender_id;
	public string $subject;
	public string $content;
	public int $seen;
	public DateTime $created_at;
	public DateTime $updated_at;
}