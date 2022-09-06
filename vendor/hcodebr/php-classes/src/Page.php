<?php 

namespace Hcode;
use Rain\Tpl;

class Page {

<<<<<<< HEAD
    public $tpl;
    private $options = [];
    private $defaults =  [
        "data" => []
    ];
=======
	private $tpl;
	private $options = [];
	private $defaults = [
		"header"=>true,
		"footer"=>true,
		"data"=>[]
	];
>>>>>>> ade752dd79e1948b9ba3fd40b3eded4aad9ac557

	public function __construct($opts = array(), $tpl_dir = "/views/"){
		
		$this->options = array_merge($this->defaults, $opts);

<<<<<<< HEAD
    public function __construct($opts = array(), $tpl_dir = "/views/") {

        $this->options =  array_merge($this->defaults, $opts);

        $config = array(
            "tpl_dir"       => $_SERVER['DOCUMENT_ROOT'].$tpl_dir, 
            "cache_dir"     => $_SERVER['DOCUMENT_ROOT']."/views-cache/"
        );

        Tpl::configure($config);
        $this->tpl = new Tpl;
        $this->setData($this->options["data"]);
        $this->tpl->draw("header");
    }
=======
		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tpl_dir,
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"         => false
	    );

		Tpl::configure( $config );

		$this->tpl = new Tpl;
>>>>>>> ade752dd79e1948b9ba3fd40b3eded4aad9ac557

		$this->setData($this->options["data"]);

		if ($this->options["header"] === true) $this->tpl->draw("header");

	}

	private function setData($data = array())
	{

		foreach ($data as $key => $value) {
			$this->tpl->assign($key, $value);
		}

	}

	public function setTpl($name, $data = array(), $returnHTML = false)
	{

		$this->setData($data);

		return $this->tpl->draw($name, $returnHTML);

	}

	public function __destruct(){

		if ($this->options["footer"] === true) $this->tpl->draw("footer");

	}

}

 ?>