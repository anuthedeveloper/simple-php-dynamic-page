const loadPage = (page_url) => {
  $.getJSON(
    page_url + "ajax.php",
    { callType: "" },
    function (data, textStatus, xhr) {
      // console.log(data);
      $(document).attr("title", data.title);
      $(document)
        .find("meta[name=description]")
        .attr("content", data.description);

      window.history.pushState("", "", page_url);
      $(document).find(".main").html(data.content);
    }
  );

  $(document).on("click", ".btn_load_screen", function (e) {
    e.preventDefault();

    const callType = $(this).attr("callType");

    $.getJSON(
      page_url + "ajax.php",
      { callType: callType },
      function (data, textStatus, xhr) {
        // console.log(data);

        $(document).attr("title", data.title);
        $(document)
          .find("meta[name=description]")
          .attr("content", data.description);

        $(document).find(".main").html(data.content);

        window.history.pushState("", "", page_url + data.url);
      }
    );
  });
};
