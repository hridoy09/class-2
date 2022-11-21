<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
    </head>

<body class="body">
    <div class="container-fuild">
            <!-- topnav -->
           @include('admin.master.topbar')
            <!-- end topnav -->

            <!-- side nav -->

        @include('admin.master.sidebar')


            <!-- end sidenav -->
            @yield('content')

    </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{asset('asset/js/bootstrap.js')}}"></script>
        <script>
            function myFunction() {
                if (document.getElementById("logout").style.display == "block") {

                    document
                        .getElementById("logout")
                        .style
                        .display = "none";
                } else {
                    document
                        .getElementById("logout")
                        .style
                        .display = "block";
                }

            }

            $(function () {
                var Accordion = function (el, multiple) {
                    this.el = el || {};
                    this.multiple = multiple || false;

                    // Variables privadas
                    var links = this
                        .el
                        .find('.link');
                    // Evento
                    links.on('click', {
                        el: this.el,
                        multiple: this.multiple
                    }, this.dropdown)
                }

                Accordion.prototype.dropdown = function (e) {
                    var $el = e.data.el;
                    $this = $(this),
                    $next = $this.next();

                    $next.slideToggle();
                    $this
                        .parent()
                        .toggleClass('open');

                    if (!e.data.multiple) {
                        $el
                            .find('.submenu')
                            .not($next)
                            .slideUp()
                            .parent()
                            .removeClass('open');
                    };
                }

                var accordion = new Accordion($('#accordion'), false);
            });
        </script>

</body>

</html>
