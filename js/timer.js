var countdownInterval;
        var paused = false;

        function startTimer(minutes) {
            if (countdownInterval) {
                clearInterval(countdownInterval);
            }
            
            var endTime = new Date().getTime() + minutes * 60 * 1000;
            
            countdownInterval = setInterval(function() {
                var now = new Date().getTime();
                var timeLeft = endTime - now;

                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("timer").innerHTML = "Tempo esgotado!";
                } else if (!paused) {
                    var minutesLeft = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var secondsLeft = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    document.getElementById("timer").innerHTML = minutesLeft + ":" + secondsLeft;
                }
            }, 1000);
        }

        function togglePause() {
            paused = !paused;
        }