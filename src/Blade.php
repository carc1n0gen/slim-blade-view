<?php

namespace Slim\Views;

use Philo\Blade\Blade;

class Blade
{
	/**
	 * @var Philo\Blade\Blade
	 */
	protected $bladeInstance;

	/**
	 * Initializ the internal blade instance
	 * 
	 * @param string $path  Load views from this directory.
	 * @param string $cache Cache views to this directory.
	 * @return void
	 */
	public function __construct($path, $cache)
	{
		$this->bladeInstance = new Blade($path, $cache);
	}

	/**
	 * Write a blade template to the a slim response body
	 * 
	 * @param  Psr\Http\Message\ResponseInterface $response The slim response to write to
	 * @param  string                             $template The blade template to render
	 * @param  array                              $args     Arguments to pass to the blade template
	 * @return void
	 */
	public function render($response, $template, $args = [])
	{
		return $response->getBody()->write($this->bladeInstance->view()->make($template, $args)->render());
	}
}
