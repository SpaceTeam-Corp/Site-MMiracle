function getTimeRemaining(endtime) {
    const total = Date.parse(endtime) - Date.parse(new Date());
    const seconds = Math.floor((total / 1000) % 60);
    const minutes = Math.floor((total / 1000 / 60) % 60);
    const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
    const days = Math.floor(total / (1000 * 60 * 60 * 24));

    return {
        total,
        days,
        hours,
        minutes,
        seconds
    };
}

function initializeClock(id, endtime) {
    const clock = document.getElementById(id);
    const timeinterval = setInterval(() => {
        const t = getTimeRemaining(endtime);
        clock.innerHTML = '<span>' + t.days + '</span><span> Jours </span><span>' +
            t.hours + '</span><span> Heures </span><span>' + t.minutes + '</span><span> Minutes </span><span>' +
            t.seconds + '</span><span> Secondes </span>';
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }, 1000);
}

const deadline = '2024-03-20T00:00:00';
initializeClock('timer', deadline);