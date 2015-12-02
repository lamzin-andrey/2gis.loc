<?php

/* StudyAppStudyAppBundle:Default:api_test.html.twig */
class __TwigTemplate_7c512826054618a39a402673bf7011073a3e8b1724237d3ad32673aa2df443f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppStudyAppBundle:Default:api_test.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ec57d89fa98c0cf707ac4d16a1af01346b33552931d9255ff10d2aa1b357fe = $this->env->getExtension("native_profiler");
        $__internal_76ec57d89fa98c0cf707ac4d16a1af01346b33552931d9255ff10d2aa1b357fe->enter($__internal_76ec57d89fa98c0cf707ac4d16a1af01346b33552931d9255ff10d2aa1b357fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:api_test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ec57d89fa98c0cf707ac4d16a1af01346b33552931d9255ff10d2aa1b357fe->leave($__internal_76ec57d89fa98c0cf707ac4d16a1af01346b33552931d9255ff10d2aa1b357fe_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9569920e058d1ecee6b95a0aa9b04b1cb29207061a52982c4bba1deb27dc6acc = $this->env->getExtension("native_profiler");
        $__internal_9569920e058d1ecee6b95a0aa9b04b1cb29207061a52982c4bba1deb27dc6acc->enter($__internal_9569920e058d1ecee6b95a0aa9b04b1cb29207061a52982c4bba1deb27dc6acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9569920e058d1ecee6b95a0aa9b04b1cb29207061a52982c4bba1deb27dc6acc->leave($__internal_9569920e058d1ecee6b95a0aa9b04b1cb29207061a52982c4bba1deb27dc6acc_prof);

    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b1272064fb977ec00d4ebd7a2e663e7a221f3d4caea4c117e323f86218e12011 = $this->env->getExtension("native_profiler");
        $__internal_b1272064fb977ec00d4ebd7a2e663e7a221f3d4caea4c117e323f86218e12011->enter($__internal_b1272064fb977ec00d4ebd7a2e663e7a221f3d4caea4c117e323f86218e12011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 8
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_b1272064fb977ec00d4ebd7a2e663e7a221f3d4caea4c117e323f86218e12011->leave($__internal_b1272064fb977ec00d4ebd7a2e663e7a221f3d4caea4c117e323f86218e12011_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28e1775d8d67e47ad2630eb5795989646bf3f240a3c5ad5301009992e81038f9 = $this->env->getExtension("native_profiler");
        $__internal_28e1775d8d67e47ad2630eb5795989646bf3f240a3c5ad5301009992e81038f9->enter($__internal_28e1775d8d67e47ad2630eb5795989646bf3f240a3c5ad5301009992e81038f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<h2>Документация API</h2>

    <h4>Список зданий</h4>
    <p>Запрос: GET /buildings</p>
    <p><a href=\"/buildings\" target=\"_blank\">Список зданий в новой вкладке</a></p>
    <p>Формат ответа: Запрос аналогичен /buildings/page/1 поэтому формат ответа смотрите в описании этого запроса</p>

    <p>&nbsp;</p>
    <h4>Постраничный список зданий</h4>
    <p>Запрос: GET /buildings/page/{N}</p>
    <p><a href=\"/buildings/page/1\" target=\"_blank\">Список зданий в новой вкладке</a></p>
    <div>Формат ответа:
        <p>В случае успеха возвращается http статус 200</p>
    <div style=\"background-color:gray;\">
        <pre>
{
    list: [{
      id: integer,       //Уникальный номер в системе
      city_id: integer,  //Идентификатор города
      home: integer,     //Номер дома
      corps: integer,    //Корпус
      street: string,    //Улица
      longitude: double, //Долгота
      latiitude: double, //Широта
      is_accepted: bool, //Проверен модератором
      is_deleted: bool   //Удален
    }, ...],
    total:integer,   //Всего элементов в базе
    page:integer,    //Запрошенная страница
    items_per_page:integer, //Элементов на странице
}
        </pre>
    </div>
        <p>В случае неудачи возвращается http статус 404</p>
    <div style=\"background-color:gray;\">
        <pre>
{
    list: [],
    total:integer,   //Всего элементов
    page:integer,    //Запрошенная страница
    items_per_page:integer, //Элементов на странице
    message:\"404 Not Found\"
}
        </pre>
    </div>
    </div>

    <p>&nbsp;</p>
    <h4>Список всех организаций находящихся в конкретном здании <span style=\"color:red\">*</span></h4>
    <p>Запрос: GET /firms?filter[building_id]=id</p>
    <p><a href=\"/firms?filter[building_id]=1\" target=\"_blank\">Пример списка организаций в новой вкладке</a></p>
    <div>Формат ответа:
        <p>В случае успеха возвращается http статус 200</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    list: [{
      id: integer,       //Уникальный номер предприятия в системе
      building_id: integer,  //Идентификатор здания
      name: string,    //Наименование
      is_accepted: bool, //Проверен модератором
      is_deleted: bool   //Удален
    }, ...],
    total:integer,   //Всего элементов в базе
    page:integer,    //Запрошенная страница
    items_per_page:integer, //Элементов на странице
}
        </pre>
        </div>
<p>В случае неудачи возвращается http статус 404</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    list: [],
    total:integer,   //Всего элементов
    page:integer,    //Запрошенная страница
    items_per_page:integer, //Элементов на странице
    message:\"404 Not Found\"
}
        </pre>
        </div>
    </div>

    <p>&nbsp;</p>
    <h4>Список всех организаций, которые относятся к указанной рубрике  <span style=\"color:red\">*</span></h4>
    <p>Запрос: GET /firms?filter[rubric_id]=id</p>
    <p><a href=\"/firms?filter[rubric_id]=16\" target=\"_blank\">Пример списка организаций из рубрики в новой вкладке</a></p>
    <p>Формат ответа аналогичен ответу на предыдущий запрос GET /firms?filter[building_id]=id</p>

    <p>&nbsp;</p>
    <h4>Список организаций, которые находятся в заданном радиусе/прямоугольной области относительно указанной точки на карте <span style=\"color:red\">*</span></h4>
    <p>Запрос: GET /firms?filter[latitude]={LAT}&filter[longitude]={LNG}&filter[radius]={RADIUS}</p>
    <p>Широта и долгота задаются как double, радиус как целое</p>
    <p><a href=\"/firms?filter[latitude]=55.774254&filter[longitude]=37.546525&filter[radius]=37\" target=\"_blank\">Пример списка организаций в новой вкладке</a></p>
    <p>Формат ответа аналогичен ответу на запрос GET /firms?filter[building_id]=id</p>


    <p>&nbsp;</p>
    <h4>Выдача информации об организациях по их идентификаторам </h4>
    <p>Запрос: GET /firms/id</p>
    <p><a href=\"/firms/2\" target=\"_blank\">Пример просмотра организации по ее идентификатору</a></p>
    <div>Формат ответа:
        <p>В случае успеха возвращается http статус 200</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    firm: {
      id: integer,       //Уникальный номер предприятия в системе
      building_id: integer,  //Идентификатор здания
      name: string,    //Наименование
      is_accepted: bool, //Проверен модератором
      is_deleted: bool   //Удален
    }
}
        </pre>
        </div>
        <p>В случае неудачи возвращается http статус 404</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    message:\"404 Not Found\"
}
        </pre>
        </div>
    </div>


    <p>&nbsp;</p>
    <h4>Получить дерево руубрик каталога</h4>
    <p>Запрос: GET /rubrics</p>
    <p><a href=\"/rubrics\" target=\"_blank\">Пример дерева рубрик каталога  в новой вкладке</a></p>
    <div>Формат ответа:
        <p>В случае успеха возвращается http статус 200</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    tree: [{
      id: integer,       //Уникальный номер рубрики в системе
      parent_id: integer, //Уникальный номер рубрики в системе
      name: string,       //Наименование рубрики
      is_accepted: bool,  //Проверен модератором
      is_deleted: bool    //Удален
      children: [...]     //массив аналогичных объектов
    }, ...]
}
        </pre>
        </div>
        <p>В случае неудачи возвращается http статус 404</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    tree: [],
    message:\"404 Not Found\"
}
        </pre>
        </div>
    </div>


    <p>&nbsp;</p>
    <h4>Получить поддерево руубрик каталога</h4>
    <p>Запрос: GET /rubrics/N</p>
    <p><a href=\"/rubrics/3\" target=\"_blank\">Пример поддерева рубрик каталога  в новой вкладке</a></p>
    <div>Формат ответа:
        <p>В случае успеха возвращается http статус 200</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    tree: [{
      id: integer,       //Уникальный номер рубрики в системе
      parent_id: integer, //Уникальный номер рубрики в системе
      name: string,       //Наименование рубрики
      is_accepted: bool,  //Проверен модератором
      is_deleted: bool    //Удален
      children: [...]     //массив аналогичных объектов
    }, ...]
}
        </pre>
        </div>
        <p>В случае неудачи возвращается http статус 404</p>
        <div style=\"background-color:gray;\">
        <pre>
{
    tree: [],
    message:\"404 Not Found\"
}
        </pre>
        </div>
    </div>


    <p>&nbsp;</p>
    <h4>Ппоиск организации по названию</h4>
    <p>Запрос: GET /firms?filter[name]=NAME</p>
    <p><a href=\"/firms?filter[name]=Хороший маркет\" target=\"_blank\">Пример поиска организации в новой вкладке</a></p>
    <p>Формат ответа аналогичен ответу на запрос GET /firms?filter[building_id]=id</p>
";
        
        $__internal_28e1775d8d67e47ad2630eb5795989646bf3f240a3c5ad5301009992e81038f9->leave($__internal_28e1775d8d67e47ad2630eb5795989646bf3f240a3c5ad5301009992e81038f9_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:api_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  70 => 11,  61 => 8,  55 => 7,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
