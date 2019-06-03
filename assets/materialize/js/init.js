(function($)
{
  $(function()
  {
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function()
{
  refreshTable();
});

function refreshTable()
{
  $('#tableHolder').load('table', function()
  {
    setTimeout(refreshTable, 2000);
  });
}
