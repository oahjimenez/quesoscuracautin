(function($) {
    "use strict";

    var eventsJs = [{
        "title" : "Feria Quesos Curacautín",
        "start" : "2017-03-24 10:20:00",
        "end" : "2017-03-26 11:00:00",
        "allDay" : true
     }];
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            events: eventsJs
        })

    });
})(jQuery);
