<?php
/**
 * MyWidgetsApp Controller
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 */

App::uses('AppController', 'Controller');

/**
 * MyWidgetsApp Controller
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 */
class MyWidgetsAppController extends AppController {

/**
 * use component
 *
 * @var array
 */
	public $components = array(
		'Pages.PageLayout',
		'Security',
	);
}
