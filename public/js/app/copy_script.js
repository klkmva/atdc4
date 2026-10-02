const notifier = document.createElement('div');
document.body.appendChild(notifier);
notifier.className = "notifier";
notifier.innerHTML = "";
const duration = 2000;
var zero;

function copy(clip, txt) {
    navigator.clipboard.writeText(clip);
    notify(txt);
}

function notify(txt) {
    notifier.innerHTML = txt;
    zero = document.timeline.currentTime;
    requestAnimationFrame(animateup);
}

function animateup(timestamp) {
    const value = (timestamp - zero) / duration;
    if (value < 1) {
        notifier.style.opacity = value;
        requestAnimationFrame((t) => animateup(t));
    }
    else {
        notifier.style.opacity = 1;
        zero = document.timeline.currentTime;
        setTimeout(animatedn(zero), 1500);
    }
}

function animatedn(timestamp) {
    const value = 1 - ((timestamp - zero) / duration);
    if (value > 0) {
        notifier.style.opacity = value;
        requestAnimationFrame((t) => animatedn(t));
    }
    else {
        notifier.style.opacity = 0;
    }
}
