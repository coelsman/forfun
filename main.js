$(document).ready(function () {

/*function getRandomColor() {
	var letters = '0123456789ABCDEF'.split('');
	var color = '#';
	for (var i = 0; i < 6; i++ ) {
		color += letters[Math.floor(Math.random() * 16)];
	}
	return color;
}

function getRandomTime () {
	return Math.floor(2400 + Math.random()*600);
}

$('.main_wrap .scroll').each(function (k, ele) {

	$(ele).find('.bar').css({
		'background-color': getRandomColor()
	});

	setInterval(function () {

		$(ele).find('.bar').animate({
			'width': '100%'
		}, getRandomTime());

	}, 300);

});*/

var res1 = $('.container#res-1');

if (res1.length > 0) {

alert(22);

}

});

var snookerPage = $('.container#snooker');

if (snookerPage.length > 0) {

var leftElement = snookerPage.find('.wrap_left'),
		rightElement = snookerPage.find('.wrap_right'),
		players,
		isStart = false, isFrame = false, isWrongShot = false;

initialize();

$.getJSON('json/player.json', function (js) {
	player = js;
	$.each(js, function (k, v) {
		leftElement.find('.dropdown select').append('<option value="'+k+'">'+v.n+'</option>');
	});
});

leftElement.find('.dropdown select').on('change', function () {
	var d = $(this).attr('p');
	$(this).parent().parent().find('name').html(player[this.value].n);
	$(this).parent().parent().find('img').attr('src', player[this.value].m);
	leftElement.find('.timeline .frame .player-'+d+' name').html(player[this.value].n);
});

rightElement.find('.btn_end_game').on('click', function () {
	isStart = (isStart) ? false : true;
	handleButton();
});

rightElement.find('.btn_end_frame').on('click', function () {
	isFrame = (isFrame) ? false : true;
	handleButton();
});

function initialize () {
	leftElement.find('.row_player .player').each(function (id, ele) {
		$(this).find('name').html('Unknown Player');
		$(this).find('img').attr('src', '');
	});
	leftElement.find('.row_frame .player').html('0');
	leftElement.find('.row_point .player').html('0');
	leftElement.find('.timeline .frame .player .list').html('');
	leftElement.find('.timeline .frame .player name').html('');
}

function handleButton () {
	rightElement.find('.ot > div').addClass('disable');
	rightElement.find('.btn_end_game').removeClass('disable');

	if (!isStart) {
		rightElement.find('.btn_end_game').html('Start Game');
		isFrame = false;
	} else {
		rightElement.find('.btn_end_game').html('End Game');
		rightElement.find('.btn_end_frame').removeClass('disable');
	}

	if (!isFrame)
		rightElement.find('.btn_end_frame').html('Start Frame');
	else {
		rightElement.find('.btn_wrong_shot').removeClass('disable');
		rightElement.find('.btn_end_frame').removeClass('disable').html('End Frame');
	}
}

}