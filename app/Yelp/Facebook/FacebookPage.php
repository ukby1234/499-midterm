<?php
	namespace Yelp\Facebook;
	class FacebookPage {
		protected $page_id;
		public function __construct($page_id) {
			$this->page_id = $page_id;
		}
		public function get() {
			$endpoint = "http://graph.facebook.com/" . $this->page_id;
			$json = file_get_contents($endpoint);
			return json_decode($json);
		}
	}
?>