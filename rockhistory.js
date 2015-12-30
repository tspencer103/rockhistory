    /* Get today's history on page load */
        $(function() {
            $.ajax({
                type: "POST",
                url: '/rockhistory/pull_history.php',
                data: "" + status,
                success: function(data) {
                    document.getElementById("history").innerHTML = data;

                }
            });
        });

    /* Get user selected mm/dd history */
        $(document).ready(function() {
            $(document).on('submit', '#reg-form', function() {

                var data = $(this).serialize();

                $.ajax({

                    type: 'POST',
                    url: '/rockhistory/pull_history.php',
                    data: data,
                    success: function(data) {
                        document.getElementById("history").innerHTML = data;
                    }
                });
                return false;
            });
        });

    /* Get user search data */
        $(document).ready(function() {
            $(document).on('submit', '#search-form', function() {

                var data = $(this).serialize();

                $.ajax({

                    type: 'POST',
                    url: '/rockhistory/pull_history.php',
                    data: data,
                    success: function(data) {
                        document.getElementById("history").innerHTML = data;
                    }
                });
                return false;
            });
        });

        /* Clear input field on click/focus */
 	$(document).ready(function() {
            $('input').on('click focusin', function() {
            this.value = '';
            });
        });

