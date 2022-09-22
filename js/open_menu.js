$("#departments").on("click", function() {
  $("#departmentsList").css("display","block");

  $("#departmentsList").addClass("showMenuBackground");
  $("#departmentsList").removeClass("hideMenuBackground");

  $("#departmentsListContent").addClass("showMenuList");
  $("#departmentsListContent").removeClass("hideMenuList");

  $("#body").addClass("fixBody");
});

$("#departmentsListClose").on("click", function() {

  $("#departmentsList").addClass("hideMenuBackground");
  $("#departmentsList").removeClass("showMenuBackground");

  $("#departmentsListContent").addClass("hideMenuList");
  $("#departmentsListContent").removeClass("showMenuList");

  setTimeout(function() {$("#departmentsList").css("display","none")}, 250);
});
