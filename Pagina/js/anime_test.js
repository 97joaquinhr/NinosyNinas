var basicTimeline = anime.timeline();
basicTimeline
    .add({
        targets: ['#lineDrawing .lines path', '#lineDrawing .lines circle'],
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
        targets: ['#lineDrawing .lines path', '#lineDrawing .lines circle'],
        easing: 'easeInOutSine',
        duration: 400,
        opacity: 0,
        offset: '-=800'
    });
