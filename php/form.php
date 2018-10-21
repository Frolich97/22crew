<html>
<head>
<title>HTML-форма</title>
</head>
<body>
<?PHP
//переменные
$name = $id = isset($_GET['name']) ? $_GET['name'] : null;
$mail = $_GET['mail'];
//form
print ("Уважаемый $name. Ваша заявка принята. В ближайщее время с Вами свяжется менеджер для уточнения деталей. <br>\n");
?>
<?php
//Создает XML-строку и XML-документ при помощи DOM 
$dom = new DomDocument('1.0'); 
//добавление корня - <Посетители> 
$books = $dom->appendChild($dom->createElement('Посетители')); 
// добавление элемента <Имя> в <Посетители> 
$nam = $books->appendChild($dom->createAttribute('Имя')); 
// добавление элемента текстового узла <Имя> в <Имя> 
$nam->appendChild( 
                $dom->createTextNode($_GET['name']));
// добавление элемента <Почта> в <Посетители> 
$mai = $books->appendChild($dom->createAttribute('Почта')); 
// добавление элемента текстового узла <Почта> в <Почта> 
$mai->appendChild( 
                $dom->createTextNode($_GET['mail']));	
// добавление элемента <Телефон> в <Посетители> 
$phon = $books->appendChild($dom->createAttribute('Комментарий')); 
// добавление элемента текстового узла <Почта> в <Почта> 
$phon->appendChild( 
                $dom->createTextNode($_GET['text']));					
//генерация xml 
$dom->formatOutput = true; // установка атрибута formatOutput
                           // domDocument в значение true 
// save XML as string or file 
$test1 = $dom->saveXML(); // передача строки в test1 
$dom->save('test1.xml'); // сохранение файла 
?>
</body>
</html>