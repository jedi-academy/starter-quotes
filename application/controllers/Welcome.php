<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

        
        //select a person randomly
        public function random() {
            $this->data['pagebody'] = 'homepage';
            //select from img 1-7 randomly
            $randomPerson = rand(0, 6);
            $source = $this->quotes->all();
            $authors[] = $source[$randomPerson];
            $this->data['authors'] = $authors;
            $this->render();
        }


	/**
	 * Homepage for our app
	 */
        //choose quote entries at random        
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' => $record['what']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

}
