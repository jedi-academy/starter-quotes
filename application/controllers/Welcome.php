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
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' => $record['what'] );
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

        public function random(){
               // this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
                $author_counter = 0;
                
		foreach ($source as $record)
		{
                    $authors[$author_counter++] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' => $record['what'] );
		}
                
                $the_author = rand(0, $author_counter - 1);
		$this->data['authors'][] = $authors[$the_author];

		$this->render(); 
        }
}
