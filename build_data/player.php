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
	),
	array(
		'n' => 'Mark Selby',
		'c' => 'England',
		'm' => 'http://i.huffpost.com/gadgets/slideshows/348235/slide_348235_3704085_sq50.jpg'
	),
	array(
		'n' => 'Ding Junhui',
		'c' => 'China',
		'm' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgWChILDRYPDRgMGRkgFRogHhcdHSAdKBwkHzQsJB4xHh0YLTUtJSlAMS4uIx8/ODMtNy0tLzcBCgoKDQwNGg8PGjIlHyU3NzctLTctLTc3OC03NzctLjc3KysrKy01NTc3Kzc1Ny0rLSs3NS0rKysrNSsrKysrK//AABEIADIAMgMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAwYBBQcEAv/EADAQAAEDAwMCAwUJAAAAAAAAAAEAAgMEESEFEjEGQRNRgSJhcZGhBxUWIzI0cnOx/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAEEAwL/xAAcEQEBAQADAAMAAAAAAAAAAAABAAIDITEEERL/2gAMAwEAAhEDEQA/AOILBWVgoi3Oh0DXtNXLchjrNDeSfO/kvuvmZNDPGyMxbBcB5BJscq8fZXpmn1elvnq9MNc505hbY4aA0OyL2zfutz11oFBWdPy1sNE3SzSRyEhoaC6zTj35AHrhSa+Vk5fwlQfH04/Q3EURZCrp5ZERERSQxSTyBkMZe48BoJKjVz6Xa6koYZBGxnjSjxXSON7E2AAtkYNs8lDFsunxqnRmm1MmqM8OGrLWvaw3kYezsEAX45vwptX6n/FezRqL2Wz7Wlzm2cbG/GcC1yb9l0PU6DS6zSHs1CMTsqbtIDrOFsi3vxdVjo/SKLRqyZ2oUrmbXGODfa7xyH4sBcYAHkofvh1t2nZVO+XHEB41A1/obVtGj8c7amMu2tMPPF/0nPyuqwu1faJqtKfu6DTY3tLyXOBt5Ai5BK5Z1NA2KvZK0AePGJHAedyCfW1/VV42bBKZO+7UIiLuUaC5wA7myv01XRx0ULBHs2RCOMyEbXWta9sjIuO6oQJBDh2N16JKiWrlbGThzhg8eQSSLpPSWqTTh81bUbw8lkAdb2Bcl2e9z9FZta6r0ynpRFUElrGHaXi/tkYAPlx7vkqP0/ROZBKXDaS4kAcfAKfVqaao0q8lgY5XRuA4sWhw+ocpuXiyo+W2OVBHug1quFW+kqKCPxWxkmcN5yM8ZPoqr1FFBFUxmkkL2SM3jcTcEmxGcg44KifLXUG6FshAbxt7Z7HleWrqX1Tw+Q3cAQSeVSH1Y0CIicRSUv7mH+wf6EREXUaFoANhbBX0PaoK3dn82Ln4uRFjvyZ7U7qdrWxv2ttxx/JVkIi1PJREROL/2Q=='
	),
	array(
		'n' => 'Ronnie O\'Sullivan',
		'c' => 'England',
		'm' => 'http://cdn-04.independent.ie/incoming/article34467236.ece/7cabe/ALTERNATES/w50square/is55ronni.jpg'
	),
	array(
		'n' => 'Neil Robertson',
		'c' => 'Australia',
		'm' => 'http://theoldgreenbaize.files.wordpress.com/2014/04/robertson-3.jpg?w=50&h=50&crop=1'
	),
	/*array(
		'n' => '',
		'c' => '',
		'm' => ''
	),*/
);

$file = fopen($dir.'player.json', 'w');
var_dump(fwrite($file, json_encode($players)));
fclose($file);