<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Common {
 
    // Главная страница
    public function action_index()
    {
        $articles = array();
 
        $content = View::factory('/pages/show')
                ->bind('articles', $articles);
 
        $article = new Model_Article();
        $articles = $article->get_all();
 
        $this->template->content = $content;
    }
 
} // End Page

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
 
} // End Welcome