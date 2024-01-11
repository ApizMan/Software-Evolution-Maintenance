@extends('layouts.model')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Duty Schedule</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    </head>

    <body>

        <div class="container">
            <h1>Calendar View</h1>
            <div id='calendar'></div>
        </div>

        <script>
            $(document).ready(function() {
                var SITEURL = "{{ url('/') }}";

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/fullcalender",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function(event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {
                        var title = prompt('Person In Charge:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/fullcalenderAjax",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function(data) {
                                    displayMessage("Schedule Created Successfully");

                                    calendar.fullCalendar('renderEvent', {
                                        id: data.id,
                                        title: title,
                                        start: start,
                                        end: end,
                                        allDay: allDay
                                    }, true);

                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },

                    // edit function
                    eventDrop: function(event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                        $.ajax({
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function(response) {
                                displayMessage("Schedule Updated Successfully");
                            }
                        });
                    },

                    // 
                    eventClick: function(event) {
                        var operation = prompt('Choose an operation: Edit, View, Delete');
                        if (operation) {
                            if (operation.toLowerCase() === 'edit') {
                                editEvent(event);
                            } else if (operation.toLowerCase() === 'view') {
                                viewEvent(event);
                            } else if (operation.toLowerCase() === 'delete') {
                                deleteEvent(event);
                            } else {
                                alert('Invalid operation');
                            }
                        }
                    }
                });

                function editEvent(event) {
                    var newTitle = prompt('Edit Person In Charge:', event.title);
                    if (newTitle !== null) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                        $.ajax({
                            url: SITEURL + "/fullcalenderAjax",
                            data: {
                                title: newTitle,
                                start: start,
                                end: end,
                                id: event.id, // Pass the event ID for identification
                                type: 'update'
                            },
                            type: "POST",
                            success: function(data) {
                                displayMessage("Schedule Edited Successfully");

                                // Update the event title on the calendar
                                event.title = newTitle;
                                $('#calendar').fullCalendar('updateEvent', event);
                            }
                        });
                    }
                }

                function viewEvent(event) {
                    alert('View Event: ' + event.title);
                    // Add your code to handle viewing the event details
                }

                function deleteEvent(event) {
                    if (confirm('Are you sure you want to delete this event?')) {
                        $.ajax({
                            url: SITEURL + "/fullcalenderAjax",
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            type: "POST",
                            success: function(data) {
                                displayMessage("Schedule Deleted Successfully");

                                // Remove the event from the calendar
                                $('#calendar').fullCalendar('removeEvents', event.id);
                            }
                        });
                    }
                }

                function displayMessage(message) {
                    toastr.success(message, 'Event');
                }
            });
        </script>


    </body>

    </html>
@endsection
