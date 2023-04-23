$(document).ready(() => {
  $("#add-real-estate-form").submit((event) => {
    event.preventDefault();

    let form_data = new FormData(
      document.getElementById("add-real-estate-form")
    );
    // let brand = $("[name='brand']").val()
    // let model = $("[name='model']").val()
    // let price = $("[name='price']").val()
    // let quantity = $("[name='quantity']").val()
    // let image = $("[name='image']").val()

    // console.log(brand, model, price, quantity, image);

    //console.log(form_data);

    $.ajax({
      url: "add-item-to-db.php",
      type: "POST",
      data: form_data,
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        alert(data);
      },
    });
  });
});
