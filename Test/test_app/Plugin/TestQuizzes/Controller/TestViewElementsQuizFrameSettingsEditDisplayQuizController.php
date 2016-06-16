<?php
/**
 * View/Elements/QuizFrameSettings/edit_display_quizテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author AllCreator <info@allcreator.net>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * View/Elements/QuizFrameSettings/edit_display_quizテスト用Controller
 *
 * @author AllCreator <info@allcreator.net>
 * @package NetCommons\Quizzes\Test\test_app\Plugin\TestQuizzes\Controller
 */
class TestViewElementsQuizFrameSettingsEditDisplayQuizController extends AppController {

/**
 * edit_display_quiz
 *
 * @return void
 */
	public function edit_display_quiz() {
		$this->autoRender = true;
	}

}
