<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Karting</title>

    <link rel="stylesheet" href="../public/css/bootstrap@5.2.0.min.css">
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>

<?php
    include("../includes/header.php");
?>

<section class="hero row" style="margin-top: 10vh;">
    <div class="calendar-container p-4 rounded bg-dark">
        <div id="calendar"></div>

    </div>
</section>



<?php
    include("../includes/footer.php");
?>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/dist/index.global.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {

                initialView: 'dayGridMonth',

                locale: 'fr',

                height: 700,

                headerToolbar: {

                    left: 'prev,next today',

                    center: 'title',

                    right: 'dayGridMonth,timeGridWeek'

                },

                events: './events.php',

                eventDidMount: function(info){

                    if(info.event.extendedProps.image){

                        info.el.style.backgroundImage =
                            "url('" +
                            info.event.extendedProps.image +
                            "')";

                        info.el.style.backgroundSize =
                            "cover";

                        info.el.style.backgroundPosition =
                            "center";

                        info.el.style.color =
                            "white";

                        info.el.style.border =
                            "none";

                    }

                },
            /* Raha any anaty pages hafa mintsy */
                eventClick: function(info){

                    window.location.href =
                        "./souspages/course_detail.php?id_course=" +
                        info.event.id;

                }

            /* Raha modal no tianao atao */

            // eventClick: function(info){

            //     document.getElementById(
            //         "courseTitle"
            //     ).innerHTML =
            //         info.event.title;

            //     document.getElementById(
            //         "courseDescription"
            //     ).innerHTML =
            //         info.event.extendedProps.description;

            //     let modal =
            //         new bootstrap.Modal(
            //             document.getElementById(
            //                 'courseModal'
            //             )
            //         );

            //     modal.show();

            // }

            });

            calendar.render();

        });
</script>
</body>
</html>