$(function () {
  // タイトルをクリックすると
  $(".accordion-user").on("click", function () {
    // クリックした次の要素を開閉
    $(this).next().slideToggle(300);
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    $(".js-accordion-title").toggleClass("open", 300);
  });
});
