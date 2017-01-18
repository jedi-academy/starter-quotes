<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Quotes extends CI_Model {

	// The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
	var $data = array(
		array('id' => '1', 'who' => 'Martin Luther King Jr.', 'mug' => 'bob-monkhouse-150x150.jpg', 'where' => '/sleep',
			'what' => 'I Have a Dream'),
		array('id' => '2', 'who' => 'Wayne Gretzky', 'mug' => 'elayne-boosler-150x150.jpg', 'where' => '/lock/em/up',
			'what' => 'I skate to where the puck is going to be, not to where it has been.'),
		array('id' => '3', 'who' => 'Batman', 'mug' => 'mark-russell-150x150.jpg', 'where' => '/show/3',
			'what' => 'It\'s not who i am underneath but what i do that defines me.'),
		array('id' => '4', 'who' => 'Steve Jobs', 'mug' => 'Anonymous-150x150.jpg', 'where' => '/dunno',
			'what' => 'Details matter, it\'s worth waiting to get it right.'),
		array('id' => '5', 'who' => 'Joker', 'mug' => 'socrates-150x150.jpg', 'where' => '/wise/bingo',
			'what' => 'If you\'re good at something never do it for free.'),
		array('id' => '6', 'who' => 'Yo Gotti', 'mug' => 'isaac-asimov-150x150.jpg', 'where' => '/comp4711/wisdom',
			'what' => 'I\'m Lebron James you\'re a f**king rookie')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
