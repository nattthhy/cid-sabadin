<?php
echo "# cid-sabadin" >> README.md 
git init 
git add README.md 
git commit -m "primeiro commit" 
git branch -M main 
git remote add origin https://github.com/nattthhy/cid-sabadin.git
 git push -u origin main
$usuario = '';
$senha ='';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);


if($mysqli-> error){
	die ("falha no banco de dados: ".$mysqli-> error);
}