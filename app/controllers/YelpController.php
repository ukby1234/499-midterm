<?php
	class YelpController extends BaseController {
		public function listRestaurant() {
			$restaurants = Restaurant::all();
			return View::make('Yelp/Restaurants', [
				'restaurants' => $restaurants
				]);
		}

	public function listReviews() {
			$id = Route::input('id');
			$reviews = Review::where('restaurant_id', "=", $id)->get();
			$restaurant = Restaurant::where('id', "=", $id)->firstOrFail();
			if ($restaurant->facebook_page) {
				$facebook = new \Yelp\Facebook\FacebookPage($restaurant->facebook_page);
				$facebook = $facebook->get();
			}
			else
				$facebook = null;
			return View::make('Yelp/Reviews', [
				'reviews' => $reviews, 
				'restaurant' => $restaurant,
				'facebook_data' => $facebook
				]);
		}
	}
?>