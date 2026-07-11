$(function () {
  // タイトルをクリックすると
  $(".js-accordion-title").on("click", function () {
    // クリックした次の要素を開閉
    $(this).next().slideToggle();
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    $(this).toggleClass("open");
    $(".js-accordion-title").not(this).removeClass('open');
  });
});

$(function () {
  // タイトルをクリックすると
  $(".js-modal-open").on("click", function () {
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    $('#modal_open').fadeIn();
    $(".js-modal_open").not(this).removeClass('open');
    var post = $(this).attr('post');
    var post_id = $(this).attr('post_id');

    $('.form-control1').val(post);
    $('.up_id').val(post_id);
  });
});
