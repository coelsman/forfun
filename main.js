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
		players = [null, null, null],
		points = [null, 0, 0],
		consecutive = [null, 0, 0],
		nowPlayer,
		ballsControl = [null, 15, 1, 1, 1, 1, 1, 1],
		isStart = false, isFrame = false, isWrongShot = false,
		matchTime = 0, frameTime = 0,
		handleIntervalMatch, handleIntervalFrame;

initialize();

$.getJSON('json/player.json', function (js) {
	player = js;
	$.each(js, function (k, v) {
		leftElement.find('.dropdown select').append('<option value="'+k+'">'+v.n+'</option>');
	});
});

leftElement.find('.dropdown select').on('change', function () {
	var d = parseInt($(this).attr('p'));
	$(this).parent().parent().find('name').html(player[this.value].n);
	$(this).parent().parent().find('img').attr('src', player[this.value].m);
	leftElement.find('.timeline .frame .player-'+d+' name').html(player[this.value].n);
	players[d] = parseInt(this.value);
});

leftElement.find('.row_player .player').on('click', function () {
	var next = parseInt($(this).attr('p'));
	if (isStart && isFrame && next != nowPlayer) {
		consecutive[nowPlayer] = 0;
		nowPlayer = next;
		leftElement.find('.row_player .player').removeClass('select');
		$(this).addClass('select');
	}
});

rightElement.find('.btn_end_game').on('click', function () {
	isWrongShot = false;
	isStart = (isStart) ? false : true;
	if (isStart && (players[1] == null || players[2] == null)) {
		alert('Please choose player');
		return;
	}
	handleButton();
});

rightElement.find('.btn_wrong_shot').on('click', function () {
	if (isStart && isFrame)
		isWrongShot = (isWrongShot) ? false : true;
	handleButton();
});

rightElement.find('.btn_end_frame').on('click', function () {
	isWrongShot = false;
	isFrame = (isFrame) ? false : true;
	handleButton();
});

rightElement.find('.wrap_ball > div').on('click', function () {
	var p = parseInt($(this).find('.ball').attr('v'));
	if (isFrame && isStart) {
		points[nowPlayer] += p;
		consecutive[nowPlayer] += p;
		handlePoint();
	}
});

function initialize () {
	leftElement.find('.row_player .player').each(function (id, ele) {
		$(this).find('name').html('Unknown Player');
		$(this).find('img').attr('src', '');
	});
	leftElement.find('.row_frame .player').html('0');
	leftElement.find('.row_point .player').html('0 (0)');
	leftElement.find('.timeline .frame .player .list').html('');
	leftElement.find('.timeline .frame .player name').html('');
}

function handleButton () {
	rightElement.find('.ot > div').addClass('disable');
	rightElement.find('.btn_end_game').removeClass('disable');
	var w = (isWrongShot) ? 'Wrong Shot' : 'Good Shot';

	if (!isStart) {
		rightElement.find('.btn_end_game').html('Start Game');
		isFrame = false;
	} else {
		rightElement.find('.btn_end_game').html('End Game');
		rightElement.find('.btn_end_frame').removeClass('disable');
	}

	if (!isFrame) {
		rightElement.find('.btn_end_frame').html('Start Frame');
		nowPlayer = undefined;
		leftElement.find('.row_player .player').removeClass('select');
	}	else {
		rightElement.find('.btn_wrong_shot').removeClass('disable').html(w);
		rightElement.find('.btn_end_frame').removeClass('disable').html('End Frame');
	}
	handleTime();
}

function handleTime () {
	var timeElement = leftElement.find('.wrap_time');
	if (isStart) {
		if (!handleIntervalMatch)
			handleIntervalMatch = setInterval(function () {
				matchTime++;
				var h = Math.floor(matchTime/3600), m = Math.floor(matchTime/60), s = matchTime%60;
				timeElement.find('.match .value').html(('0'+h).slice(-2) + ':' + ('0'+m).slice(-2) + ':' + ('0'+s).slice(-2));
			}, 1);
	} else {
		clearInterval(handleIntervalMatch);
		clearInterval(handleIntervalFrame);
		handleIntervalFrame = handleIntervalMatch = undefined;
		matchTime = 0;
	}

	if (isFrame) {
		if (!handleIntervalFrame)
			handleIntervalFrame = setInterval(function () {
				frameTime++;
				var m = Math.floor(frameTime/60), s = frameTime%60;
				timeElement.find('.frame .value').html(('0'+m).slice(-2) + ':' + ('0'+s).slice(-2));
			}, 150);
	} else {
		clearInterval(handleIntervalFrame);
		handleIntervalFrame = undefined;
		frameTime = 0;
	}
}

function handlePoint () {
	leftElement.find('.row_point .player-'+nowPlayer).html(points[nowPlayer] + ' (' + consecutive[nowPlayer] + ')');
}

}