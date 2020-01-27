let like = (id) => {
    $.ajax({
        url: "http://127.0.0.1:8000//product/like/" + id,
        method: 'POST'
      });
}