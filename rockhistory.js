    /* Get today's history on page load */
        $(function() {
            $.ajax({
                type: "POST",
                url: 'http://96x.com/rockhistory/pull_history.php',
                data: "" + status,
                success: function(data) {
                    document.getElementById("history").innerHTML = data;

                }
            });
        });

    /* Get user selected mm/dd history on page load */
        $(document).ready(function() {
            $(document).on('submit', '#reg-form', function() {

                var data = $(this).serialize();

                $.ajax({

                    type: 'POST',
                    url: 'http://96x.com/rockhistory/pull_history.php',
                    data: data,
                    success: function(data) {
                        document.getElementById("history").innerHTML = data;
                    }
                });
                return false;
            });
        });
