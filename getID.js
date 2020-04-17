function loaded() {
  $(".navbar").click(function (e) {
    var datum = new Date();
    datum = datum.toISOString();
    $.post("../othertake.php", {
      itemid: e.target.id,
      pageurl: window.location.href,
      datum: datum
    });
  });

  $(".row").click(function (e) {
    var datum = new Date();
    datum = datum.toISOString();
    $.post("../othertake.php", {
      itemid: e.target.id,
      pageurl: window.location.href,
      datum: datum
    });
  });

  $(".container").click(function (e) {
    var datum = new Date();
    datum = datum.toISOString();
    $.post("../othertake.php", {
      itemid: e.target.id,
      pageurl: window.location.href,
      datum: datum
    });
  });
}