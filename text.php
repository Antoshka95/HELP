Первое задание (1 балл)

Вывод данных из массива с сортировкой, либо условием вывода, либо условием выделения.

Для подготовки рекомендуется использования варианты задания РГЗ№1. Экзаменационные задания будут аналогичны, но использовать другие файлы данных.

Второе задание (2 балла)

Обработка данных из формы, либо из базы данных с выводом результата пользователю. Обработка включает в себя логическое либо математическое условие, либо задачу на дату и время. 

Задание, рекомендованные для подготовки, представлены в отдельном файле. Экзаменационные задания будут аналогичными, но использовать другую базу данных.

Штрафные баллы:
●	-0,25 - неверная индентация
●	-0,25 - несемантичное название переменной/класса/параметра
●	-0,25 - транслит
●	-0,25 - неиспользуемые переменные или неиспользуемый код
●	-0,25 - несоблюдение формата ввода/вывода данных
●	-0,25 - необоснованное наличие в пользовательском интерфейсе фраз на иностранном языке
●	-0,25 вывод деформированного изображения (сжатого, либо растянутого)
●	-0,5 - вывод пользователю необработанного сообщения об ошибке в каком-то случае 
●	-0,5 - отсутствие повторного заполнения данных формы
●	-0,25 - вывод сообщения об ошибке до пользовательского ввода
●	-0,5 - XSS, отсутствие экранирования (htmlspecialchars) при выводе текстовых данных, полученных от пользователя
●	-0,5 SQL injection, отсутствие экранирование данных, полученных от пользователя, в SQL-запросе
Штрафные баллы считаются отдельно для каждого задания.
Результат округляется в пользу студента.

Формат вывода:
●	все даты вводятся и выводятся в формате дд.мм.гггг, если в задании не указано иное,
●	все числа с дробной частью (кроме денежных сумм) вводятся и выводятся в формате 123,5 (разделитель - запятая), если в задании не указано иное,
●	все денежные суммы выводятся в формате 12 000, 00 руб (пробелом отделены тысячные разряды, разделитель запятая), а вводятся в формате 12000,0 (пользователь не обязан отделять что-то пробелом), если в задании не указано иное; указано, в какой валюте выводится сумма.
Интерфейс пользователя должен быть выполнен на русском языке, кроме слов, которые принято указывать на английском (e-mail, URL). 

Студент имеет две попытки сдачи:
если при первой попытке результат неверный, либо есть штрафные баллы, преподаватель возвращает на доработку. Развернутого комментария при этом не предоставляется.

При входе в аудиторию студенты складывают на первую парту мобильные телефоны, планшеты, любые другие средства связи. При обнаружении у студента телефона (или другого средства связи), студент удаляется с экзамена.

При выполнении работы разрешается пользоваться материалами в интернете, но только в пассивном режиме. Запрещено использовать или открывать в браузере почтовую программу, любые мессенджеры, любые другие средства двусторонней связи. При обнаружении студент удаляется с экзамена.


Условия выполнения кода:
●	PHP7
●	error_reporting=E_ALL
Рекомендуемая кодировка UTF-8.


Пояснение по некоторым типам ошибок:
	Неправильно	Правильно
Неверная индентация	
for($i=0;$i<10;$i++) {
$i++;
}
    for($j=0;$j<10;$j++) {
    $j++;
    }	
	
	
for($i=0;$i<10;$i++) {
	$i++;
}
for($j=0;$j<10;$j++) {
    $j++;
}
Несемантичное название переменной/класса/параметра	
$x = $a * $b;	

$cost = $price * $count;
Транслит	
$stoim = $tsena * $kolvo;	
$cost = $price * $count;
Вывод пользователю необработанного сообщения об ошибке в каком-то случае	
Notice: Undefined index: price in pricecalc.php on line 53	
Ошибка: укажите цену товара
Отсутствие повторного заполнения данных формы	
Пользователь ввел данные в поля ввода, отправил форму, результат выдался, но поля теперь пустые	
Пользователь ввел данные в поля ввода, отправил форму, результат выдался, в полях ввода указаны те значения, которые вводил пользователь
Вывод сообщения об ошибке до пользовательского ввода	
Пользователь открыл страницу и сразу видит поля, т.к. каких-то данных для расчетов не хватает	
Расчетов не производится, пока пользователь не ввел данные форму, сообщений об ошибке не появляется
XSS	
echo $_GET["name"];	
echo htmlspecialchars($_GET["name"]);
SQL injection	
$students = $db->query('SELECT * FROM `student` WHERE groupId = ' . $_GET["group"])->fetchAll();	
$query = $db->prepare('SELECT * FROM `student` WHERE groupId = :group');
$query->execute(['group' => $_GET['group']]);
$students = $query->fetchAll();



