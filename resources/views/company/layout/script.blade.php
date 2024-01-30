<script>
    document.addEventListener('DOMContentLoaded', function () {
        var countdownElement = document.querySelector('.countdown');

        if (countdownElement) {
            var creationTime = new Date(countdownElement.dataset.creationTime);
            var targetTime = new Date(creationTime);
            targetTime.setHours(targetTime.getHours() + 24);

            function updateCountdown() {
                var now = new Date();
                var timeDiff = targetTime - now;

                // Calculate remaining hours, minutes, and seconds
                var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                // Format and display the remaining time
                countdownElement.innerHTML ='Auction Ends in: ' +  hours + 'h ' + minutes + 'm ' + seconds + 's';

                // Update every second
                setTimeout(updateCountdown, 1000);
            }

            // Initial call to set up the countdown
            updateCountdown();
        }
        document.getElementById('bidBtn').addEventListener('click',function(){
            document.getElementById('bidForm').style.display='block';
        })
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>