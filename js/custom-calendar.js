(function($) {
    "use strict";

    var eventsJs = [{
        "title" : "Fiesta de la Vendimia: Venta de Quesos Curacautín",
        "start" : "2017-03-23 10:20:00",
        "end" : "2017-03-26 11:00:00",
        "allDay" : true
     },{
         "title" : "Feria Arte y Sabores de La Araucanía: Venta de Quesos Curacautín",
         "start" : "2017-03-27 10:20:00",
         "end" : "2017-03-28 11:00:00",
         "allDay" : true
      },{
          "title" : "Feria Otoño Invierno 2017 - Recinto SOFO",
          "start" : "2017-03-31 10:20:00",
          "end" : "2017-04-03 11:00:00",
          "allDay" : true
       }];
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            events: eventsJs
        })

    });
})(jQuery);
