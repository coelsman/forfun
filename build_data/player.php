<?php
$dir = realpath(dirname(__FILE__)).'/../json/';
$players = array(
	array(
		'n' => 'John Higgins',
		'c' => 'Scotland',
		'm' => 'http://static4.quoteswave.com/wp-content/uploads/2012/12/John-Higgins-50x50.jpg?31a535'
	),
	array(
		'n' => 'Judd Trump',
		'c' => 'England',
		'm' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkSBwgUChMLDRYPGRUXGBYeFBAWIBkZGSAdFxgkKCgsJCYlHBcWITEtJikrOi4uIyg0OEssNzQxLisBCgoKDAwNGg8QGjclHyUvNDctLDc0NiwrKywsNzcsNys0NCsyLCw3NywsLDQrLCsyNDcsLDc3MissLDQrOCsrN//AABEIADIAMgMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQMFBgcEAv/EAC8QAAEEAQIDBQgDAQAAAAAAAAEAAgMRBAUhBjFBEhMiUWEHMnGBkaGx0SMkQhT/xAAYAQADAQEAAAAAAAAAAAAAAAABAgQFA//EACARAAICAQQDAQAAAAAAAAAAAAABAhEDEyExQRIyMwT/2gAMAwEAAhEDEQA/AMOXuJgc7xbBNp6MEhoHUoN7BXJdOH8XTosMvdCJC4DoCR6EGwuDWo9PnkJhwO5pxYSKANc9htatPDXC2SdNgdjSgF7g9zT8jV9OSkcnhvH0ycPzNPPjoh4uib5keaz9VeTabLNJ+KtGPzRGN2xsJtXv2haTix5mLJgR92MpptvQPH7VEII5q3FNTimSzg4uhEIQuggq6sFpfMzawHAfUrlXVgTsgc/vGdrtCh5tPQpZ3ToaFWrNg0TVtUxgWYulGYje7bThXOyR5VsDvStg4hzX6PjSxaS7IMjix0e1xEGvFeyr3C+rtPD7TI4AxxVv1Nbbqc4GzcufTz/14jcank+8D3lnmP2sqPJpSqr5Kz7S4GP01sr8Qs7AMpFcj7vyFkLFVsPti4ohiZNhY7Xd7IGd4/bstj2eGDqST2SfIbb2sdV/5ouMbfZDnknLYRCEKg4gvTDTh6J2OAuBs1X1QIjRobA7+iDaDRcuGNYixZHw5rgYMkVZFiMnka8lp2gM03GjIw5Ish7QPcja2hV2SOW297LGtDx4WTxnNBfGTRA5i+o/XVa7pbsLC4M1J+k5TchrMeTsubXhcWmg6t7Hrus7NCnsXYsjcWjEuINTl1jWcuec2Z5C74DkAPgAB8lHJ7JiMThtVtB+2/3TK0VVbELbsRCEIgJpjW2dug/K9QNHey7f5CELj0OLGSNHdRrwKc4Ac4aJxRRr+mz8uQhDJ82Nj90V/GAdhS9oX/K7n8Aoc80IXWPIjEQhCYU//9k='
	)
);

$file = fopen($dir.'player.json', 'w');
var_dump(fwrite($file, json_encode($players)));
fclose($file);