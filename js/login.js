function userLogin() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  //alert(username + " " + password);

  /* Get from elements values */
  //var values = $(this).serialize();

  $.ajax({
    url: "insert.php",
    type: "POST",
    data: { username: username, password: password },
    success: function (response) {
      console.log(response);
      window.location.href = "index.html";
      // You will get response from your PHP page (what you echo or print)
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    },
  });
}
