var basicTimeline = anime.timeline();

// Wrap every letter in a span
$('.ml1 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

basicTimeline
	.add({
		targets: 'body',
		opacity: 1,// Animate all divs opacity to .8
		duration: 900,
		elasticity: 10,
		easing: 'easeInOutQuart'
	})
	.add({
		targets: '#lineDrawing .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutSine',
		duration: 900,
		delay: function(el, i) { return i * 250 }
	})
	.add({
		targets: '.logo_big',
		opacity: 1,// Animate all divs opacity to .8
		duration: 1200,
		elasticity: 10
	})
	.add({
		targets: '#lineDrawing .lines path',
		easing: 'easeInOutSine',
		duration: 400,
		opacity: 0,
		offset: '-=800'
	})
	.add({
		targets: '#sidenav',
		opacity: 1,// Animate all divs opacity to .8
		duration: 1000,
		elasticity: 10,
		offset: '-=800'
	})
	.add({
		targets: '.social',
		opacity: 1,// Animate all divs opacity to .8
		duration: 500,
		elasticity: 10,
		delay: function(el, i, l) {
			return i * 100;
		},
		offset: '-=1100'
	});

var indexTimeline = anime.timeline();

indexTimeline
	.add({
		targets: '.ml1 .letter',
		scale: [0.3,1],
		opacity: [0,1],
		translateZ: 0,
		easing: "easeOutExpo",
		duration: 600,
		delay: function(el, i) {
			return 70 * (i+1) + 1000
		}
	})
	.add({
		targets: '.ml1 .line',
		scaleX: [0,1],
		opacity: [0.5,1],
		easing: "easeOutExpo",
		duration: 700,
		offset: '-=875',
		delay: function(el, i, l) {
			return 80 * (l - i);
		}
	})
	.add({
		targets: '.asog-r2',
		opacity: 1,// Animate all divs opacity to .8
		duration: 500,
		elasticity: 10,
		easing: 'easeInOutQuart'
	});
