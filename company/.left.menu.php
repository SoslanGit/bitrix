<?
$aMenuLinks = Array(
	Array(
		"Вакансии", 
		"/company/vacancies/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Контакты", 
		"contacts/", 
		Array("company/contacts/"), 
		Array("FROM_IBLOCK"=>"1", "IS_PARENT"=>"1", "DEPTH_LEVEL"=>"1"), 
		"" 
	),
	Array(
		"Обратная связь", 
		"obratnaya-svyaz.php", 
		Array("company/contacts/"), 
		Array("FROM_IBLOCK"=>"1", "IS_PARENT"=>"0", "DEPTH_LEVEL"=>"2"), 
		"" 
	),
	Array(
		"Новости", 
		"news/", 
		Array(), 
		Array(), 
		"" 
	)
);
?>
