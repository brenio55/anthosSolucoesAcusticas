var textWrapper = document.querySelector('.ml7 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
    .add({
        targets: '.ml7 .letter',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 3300,
        delay: (el, i) => 2400 + 36 * i
    });

    var textWrapper = document.querySelector('.ml8 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
.add({
    targets: '.ml8 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1300,
    delay: (el, i) => 3400 + 36 * i
});
