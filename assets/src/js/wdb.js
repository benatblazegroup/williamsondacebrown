$('.nav-tabs li a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    CMSMap.UI.refresh();
});
$(function () {
  $('[data-toggle="popover"]').popover()
})
