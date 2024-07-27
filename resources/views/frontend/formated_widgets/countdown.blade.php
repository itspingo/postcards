<div id="div_widget_countdown{{$recid_widget_countdown}}" onclick="edit_widget_countdown({{$recid_widget_countdown}})">
    <div class="widget p-20-10" item="jetp-yznulq" draggable="false">
        <div>
            <section class="jetp-ngl4yv">
                <div class="jetp-feffm jetp-qpo9lj jetp-zs0p7">
                    <span wudooh="true">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$countdown_title}}</font>
                        </font>
                    </span>
                </div>
                <div class="countdown-container" id="countdown">
                    <div class="countdown-item">
                        <div id="days">0</div>
                        <div><span wudooh="true">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Day</font>
                            </font>
                        </span></div>
                    </div>
                    <div class="countdown-item">
                        <div id="hours">0</div>
                        <div><span wudooh="true">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hours</font>
                            </font>
                        </span></div>
                    </div>
                    <div class="countdown-item">
                        <div id="minutes">0</div>
                        <div><span wudooh="true">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Minutes</font>
                            </font>
                        </span></div>
                    </div>
                    <div class="countdown-item">
                        <div id="seconds">0</div>
                        <div><span wudooh="true">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Second</font>
                            </font>
                        </span></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="overlay"></div>
    </div>

    <style>
        .widget {
            padding: 20px 10px;
        }
        .jetp-ngl4yv {
            margin-bottom: 10px;
        }
        .jetp-feffm {
            margin: 0;
        }
        .jetp-qpo9lj {
            text-align: center;
        }
        .jetp-zs0p7 {
            font-size: 1.05em;
            line-height: 1.1em;
            font-family: "Sahl Naskh";
        }
        .countdown-container {
            line-height: 1;
            display: flex;
            font-size: 40px;
            direction: ltr;
            justify-content: center;
        }
        .countdown-item {
            width: 25%;
            text-align: center;
        }
        .countdown-item span {
            font-size: 15px;
            line-height: 1.1em;
            font-family: "Sahl Naskh";
        }
        .add-to-calendar {
            margin: 20px 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: underline;
        }
        .add-to-calendar svg {
            margin: 0 5px;
        }
        .overlay {
            display: none;
        }
    </style>

    <script>
        // Set the date and time we're counting down to
        const countDownDate = new Date("{{$js_date_format}}").getTime();

        // Update the countdown every 1 second
        const countdownFunction = setInterval(() => {
            // Get today's date and time
            const now = new Date().getTime();

            // Find the distance between now and the countdown date
            const distance = countDownDate - now;

            // Time calculations for days, hours, minutes, and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the elements with id="days", "hours", "minutes", "seconds"
            document.getElementById("days").innerText = days;
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
            document.getElementById("seconds").innerText = seconds;

            // If the countdown is finished, write some text
            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</div>
