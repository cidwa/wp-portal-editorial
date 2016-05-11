    $(function () {

            $("#typed").typed({

                stringsElement: $('#typed-strings'),
                typeSpeed: 40,
                backDelay: 1500,
                loop: true,
                contentType: 'html',
                loopCount: false,
                callback: function () {
                    foo();
                },
                resetCallback: function () {
                    newTyped();
                }
            });

            $(".reset").click(function () {
                $("#typed").typed('reset');
            });

        });

        function newTyped() {}

        function foo() {
            console.log("Callback");
        }
    