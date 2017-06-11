$.ajax({
  url: 'http://serverside.l/data',
  success: function(data) {
  var neop = JSON.parse(data);
    mountRiot(neop);
  }
});
function mountRiot(data){
  riot.mount('todo', {
    title: 'I want to behave!',
    items: data
    });
}
