<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Welcome extends Controller_Common {
 
    // Главная страница
    public function action_index()
    {
		//public $template = 'main';
		 
        $appEmails = array();
 
        $content = View::factory('welcome')
                ->bind('appEmails', $appEmails);
 
        //$app_email = new Model_AppDistributions();
        //$app_emails = $app_email->get_all();
		$appEmails = Model::factory('AppDistributions')->get_all();
 
        $this->template->content = $content;
    }
 
} // End Welcome


/*дальше идёт контроллер "welcom"...
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
 
    // Определяем шаблон по умолчанию
    public $template = 'main';
 
    public function action_index()
    {
        // Биндим глобальную переменную Вида
        View::bind_global('title', $title);
        // Присваиваем значение забинденой переменной
        $title = 'Работаем с Контроллером Шаблонов';
        // Создаем глобальную переменные Вида		
        View::set_global('description', 'Учимся передавать данные в шаблоны');
 
        $content = View::factory('welcome');
 
        // Передаем данные в шаблон welcome.php
        $content->age = 'больше 18';
        $content->name = 'Антон';
 
        // Выводим основной шаблон
        $this->template->content = $content;
    }
 
} // End Welcome*/
