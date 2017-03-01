<!--
 * Created by PhpStorm.
 * User: m3talc0re
 * Date: 2016. 11. 05.
 * Time: 22:33
-->

<!-- Login and Reg Modal-->

<div class="modal fade" id="loginRegModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="email" class="form-control-label">E-mail</label>
                        <input type="email" class="form-control" id="modalEmail">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-label">Jelszó</label>
                        <input class="form-control" type="password" id="modalPassword"></input>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalCloseButton"> Close </button>
                <button type="button" class="btn btn-primary" id="modalSendButton"> Send message </button>
            </div>
        </div>
    </div>
</div>

<!-- /modal -->


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

<script>

    $("#regButton").click(function(e)
    {
        e.preventDefault();
        $("#loginRegModal").show();
        $("#exampleModalLabel").html("Regisztráció");
        $("#modalCloseButton").html("Mégsem");
        $("#modalSendButton").html("Regisztráció");
    });

    $("#loginButton").click(function(e)
    {
        e.preventDefault();    // a gombnyomásra csak felvillant a modal, újratöltődött az oldal mindig, ez javította !!!
        $("#loginRegModal").show();
        $("#exampleModalLabel").html("Bejelentkezés");
        $("#modalCloseButton").html("Mégsem");
        $("#modalSendButton").html("Bejelentkezés");
    });



</script>





</body>
</html>