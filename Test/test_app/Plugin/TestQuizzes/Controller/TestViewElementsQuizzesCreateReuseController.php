<?php
/**
 * View/Elements/Quizzes/create_reuseテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author AllCreator <info@allcreator.net>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * View/Elements/Quizzes/create_reuseテスト用Controller
 *
 * @author AllCreator <info@allcreator.net>
 * @package NetCommons\Quizzes\Test\test_app\Plugin\TestQuizzes\Controller
 */
class TestViewElementsQuizzesCreateReuseController extends AppController {

/**
 * create_reuse
 *
 * @return void
 */
	public function create_reuse() {
		$this->autoRender = true;
	}

}
