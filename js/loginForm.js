function showLoginFormDialog() {
  $('#loginForm').dialog({
    closeOnEscape: true,
    modal: true,
    title: 'BeeScale',
    dialogClass: 'loginForm'
  });
}
