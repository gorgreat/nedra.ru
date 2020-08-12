<?php
$form['questionForm']=array(
	'subject'=>'Контактная форма с сайта',
	'template'=>"
		<table>
		<tr>
			<td style='padding:4px 10px'>ФИО</td>
			<td style='padding:4px 10px'>[+n+]</td>
		</tr>
		<tr>
			<td style='padding:4px 10px'>Телефон</td>
			<td style='padding:4px 10px'>[+t+]</td>
		</tr>
		<tr>
			<td style='padding:4px 10px'>E-mail</td>
			<td style='padding:4px 10px'>[+e+]</td>
		</tr>        
		<tr>
			<td style='padding:4px 10px'>Сообщение</td>
			<td style='padding:4px 10px'>[+m+]</td>
		</tr>
	</table>",
//	'to'=>'egor.makarov@gmail.com',
	'replyTo'=>$_POST['e'],
	/* span protect  config */
	'isAjax'=>true,
	'emptyFieldName'=>'name',
	'noEmptyFieldName'=>'phone',
	'noEmptyFieldValue'=>'19X84-lider',
	'cookieName'=>''
);