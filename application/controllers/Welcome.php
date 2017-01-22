<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */

	//Original index() provided
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'what' => $record['what'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	//This will generate a random number and only provide 
	public function random()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$ranNo = rand(1,6);
		$source = array($this->quotes->get($ranNo));

		$authors = array ();
		
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'what' => $record['what'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

}
